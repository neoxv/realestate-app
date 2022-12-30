<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\PropertyService;
use Illuminate\Support\Facades\Log;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\OwnerServiceInterface;
use App\Interfaces\ClientServiceInterface;
use App\Interfaces\DocumentServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use App\Interfaces\AdvertisementServiceInterface;
use App\Http\Requests\admin\PropertyCreateRequest;
use Illuminate\Support\Arr;

class PropertyController extends Controller
{
    private PropertyServiceInterface $propertyService;
    private OwnerServiceInterface $ownerService;
    private DocumentServiceInterface $documentService;
    private UserServiceInterface $userService;
    private ClientServiceInterface $clientService;
    private AdvertisementServiceInterface $advertisementService;

    public function __construct(PropertyServiceInterface $propertyService, OwnerServiceInterface $ownerService, DocumentServiceInterface $documentService, UserServiceInterface $userService, ClientServiceInterface $clientService, AdvertisementServiceInterface $advertisementService)
    {
        $this->propertyService = $propertyService;
        $this->ownerService = $ownerService;
        $this->documentService = $documentService;
        $this->userService = $userService;
        $this->clientService = $clientService;
        $this->advertisementService = $advertisementService;
    }

    public function getById(Property $property)
    {
        $related = [];
        $data = $this->propertyService->getByAttribute('type', $property->type, ['documents'], 10);
        $unrelated = [];
        foreach ($data as $value) {
            if(sizeof($related) <= 2 && $value->is_rental == $property->is_rental){
                array_push($related, $value);
            }else{
                array_push($unrelated,$value);
            }
        }
        if(sizeof($related) < 2){
            foreach ($unrelated as $value) {
                if (sizeof($related) <= 2) {
                    array_push($related, $value);
                }
            }
        }

        $recent = [];
        $recentData = $this->propertyService->getRecent(10);
        $late = [];
        foreach ($recentData as $value) {
            if (sizeof($recent) <= 3 && $value->is_rental == $property->is_rental && $value->type == $property->type) {
                array_push($recent, $value);
            }else{
                array_push($late,$value);
            }
        }

        if (sizeof($recent) < 3) {
            foreach ($late as $value) {
                if (sizeof($recent) < 3) {
                    array_push($recent, $value);
                }
            }
        }
        return view('pages.property-detail', ['property' => $property, 'recents' => $recent, 'related' => $related]);
    }

    public function create(PropertyCreateRequest $request)
    {
        if (isset($request['status']) && $request['status'] == 'true') {
            $request['status'] = true;
        } else {
            $request['status'] = false;
        }
        $request['city'] = strtolower($request['city']);
        if ($request->amenities != null) {
            $request['amenities'] = implode(',', $request->amenities);
            if ($request['subcity'] == 'none' || $request['city'] != "addis ababa") {
                $request['subcity'] = 'none';
            }
        }
        $response = $this->propertyService->create($request->all());
        if ($response->success) {
            return redirect()->route('admin.properties')->with('success', $response->message);
        }
        return redirect()->route('admin.properties')->with('error', $response->message);
    }


    public function getFavourites(User $user)
    {
        return view('pages.favourites', ['favourites' => $this->propertyService->getFavourites($user)]);
    }

    public function favourite(Request $request)
    {
        $response = $this->propertyService->favourite($request->id, $request->user);
        return response()->json($response);
    }


    public function show(Property $property)
    {
        $response = $this->propertyService->get();
        $report = $this->propertyService->getPropertyReportForDashboard();
        $count = [];
        foreach ($report as $type => $value) {
            $count[$value->type] = $value->stock_count;
        }

        return view('pages.property-list', ['properties' => $response,'count'=>$count]);
    }


    public function edit(Property $property)
    {
        //
    }

    public function update(Request $request)
    {
        if (isset($request->featured_id)) {
            if ($request->is_featured == '0') {
                $request['is_featured'] = false;
            } else {
                $request['is_featured'] = true;
            }
            $response = $this->propertyService->update($request->featured_id, $request->all());
        } else if (isset($request->closed_id)) {
            $request['is_featured'] = false;
            $request['status'] = false;
            $request['is_brokered'] = true;
            $request['closing_price'] = str_replace(',', '', $request['closing_price']);
            $request['profit'] = str_replace(',', '', $request['profit']);
            $response = $this->propertyService->update($request->closed_id, $request->all());
        } else if (isset($request->id)) {
            if(isset($request['status']) && $request['status'] == 'true') {
                $request['status'] = true;
            } else {
                $request['status'] = false;
            }
            $request['city'] = strtolower($request['city']);
            if ($request->removedDocuments != null) {
                foreach ($request->removedDocuments as $document) {
                    $this->documentService->destroy($document, 'img/properties');
                }
            }
            if ($request->amenities != null) {
                $request['amenities'] = implode(',', $request->amenities);
            }
            if ($request['subcity'] == 'none'|| $request['city'] != "addis ababa") {
                $request['subcity'] = 'none';
            }
            $response = $this->propertyService->update($request->id, $request->all());
        }

        if ($response->success) {
            return redirect()->back()->with('success', $response->message);
        } else {
            return redirect()->back()->with('error', $response->message);
        }
    }


    public function destroy(Property $property)
    {
        $documents = $property->documents;
        foreach ($documents as $document) {
            $this->documentService->destroy($document->filename, 'img/properties');
        }
        $response = $this->propertyService->delete($property);
        if ($response->success) {
            return redirect()->route('admin.properties')->with('success', $response->message);
        } else {
            return redirect()->route('admin.properties')->with('error', $response->message);
        }
    }

    public function search(Request $request)
    {
        $key = $request->input('search');
        $key = str_replace(',', '', $key);
        if ($key != '' || $key != null) {
            $properties = $this->propertyService->search($key);
            return view('pages.admin.properties', ['properties' => $properties, 'key' => $key, 'subject' => 'property', 'ownersList' => $this->ownerService->get(['id', 'name']), 'owners' => $this->ownerService->getAll(), 'types' => $this->propertyService->getAllTypes()]);
        }
        return redirect()->route('admin.properties');
    }

    public function searchFavourite(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $properties = $this->propertyService->searchFavourite($key);
            return view('pages.admin.users', ['users' => $this->userService->getAll(), 'properties' => $properties, 'key' => $key, 'subject' => 'favourite']);
        }
        return redirect()->route('admin.users');
    }

    public function searchFeatured(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $properties = $this->propertyService->searchFeatured($key);
            return view('pages.admin.advertisements', [
                'featured' => $properties,
                'key' => $key,
                'subject' => 'featured',
                'advertisements' => $this->advertisementService->getAll(),
                'clients' => $this->clientService->getAll()
            ]);
        }
        return redirect()->route('admin.advertisements');
    }

    public function filter(Request $request)
    {
        $keys = $request->all();
        unset($keys['_token']);
        if ($keys != null && count($keys) > 0) {
            $properties = $this->propertyService->filter($keys);
            // $additionalProperties = [];
            if(sizeof($properties) < 1 ){
                unset($keys['price']);
                unset($keys['area']);
                unset($keys['bedroom']);
                $keys['subcity']="all";
                $properties = $this->propertyService->filter($keys);
            }
            $report = $this->propertyService->getPropertyReportForDashboard();
            $count = [];
            foreach ($report as $type => $value) {
                $count[$value->type] = $value->stock_count;
            }
            $switchStatus=false;
            if(isset($keys['is_rental']) && ($keys['is_rental'] == true || $keys['is_rental'] == '1')){
                $switchStatus = true;
            }
            return view('pages.property-list', ['properties' => $properties,'count'=>$count, 'category_switch'=>$switchStatus]);
        }
        return redirect()->route('search');
    }

    public function userSearch(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $properties = $this->propertyService->userSearch($key);
            $report = $this->propertyService->getPropertyReportForDashboard();
            $count = [];
            foreach ($report as $type => $value) {
                $count[$value->type] = $value->stock_count;
            }

            return view('pages.property-list', ['properties' => $properties, 'key' => $key, 'count' => $count, 'category_switch' => false]);
        }
        return redirect()->route('user.property.filter',['is_rental'=>'0', 'category_switch' => false]);
    }

    public function createFeature(Request $request)
    {
        $owner = $this->ownerService->getOwnersByPhonenumber($request->ownerPhonenumber);

        return view('pages.admin.properties', ['properties' => $owner->properties, 'owner' => $owner]);
    }
}
