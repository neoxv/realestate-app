<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Services\PropertyService;
use Illuminate\Support\Facades\Log;
use App\Interfaces\OwnerServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use App\Http\Requests\admin\PropertyCreateRequest;

class PropertyController extends Controller
{
    private PropertyServiceInterface $propertyService;
    private OwnerServiceInterface $ownerService;

    public function __construct(PropertyServiceInterface $propertyService, OwnerServiceInterface $ownerService)
    {
        $this->propertyService = $propertyService;
        $this->ownerService = $ownerService;
    }

    public function getById(Property $property)
    {
        return view('pages.property-detail',['property' => $property,'recents'=>$this->propertyService->getRecent(3),'related'=>$this->propertyService->getByAttribute('type', $property->type, ['documents'],2)]);
    }

    public function create(PropertyCreateRequest $request)
    {
        $response = $this->propertyService->create($request->all());
        if($response['success']){
            return redirect()->route('admin.properties')->with('success', $response['message']);
        }
        return redirect()->route('admin.properties')->with('error', $response['message']);
    }


    public function getFavourites(User $user)
    {
        return view('pages.favourites',['favourites'=>$this->propertyService->getFavourites($user)]);
    }

    public function favourite(Request $request)
    {
        $response = $this->propertyService->favourite($request->id,$request->user);
        return response()->json($response);
    }


    public function show(Property $property)
    {
        $response = $this->propertyService->get();
        return view('pages.property-list',['properties'=>$response]);
    }


    public function edit(Property $property)
    {
        //
    }

    public function update(Request $request)
    {
        if(isset($request->featured_id)){
            $response = $this->propertyService->update($request->featured_id,$request->all());
        }else if(isset($request->id)){
            $response = $this->propertyService->update($request->id,$request->all());
        }

        if($response->success){
            return redirect()->route('admin.properties')->with('success',$response->message);
        }else{
            return redirect()->route('admin.properties')->with('error', $response->message);
        }
        //call service
    }


    public function destroy(Property $property)
    {
        //
    }

    public function search(Request $request){
        $key = $request->input('search');
        if($key != '' || $key != null){
            $properties = $this->propertyService->search($key);
            return view('pages.admin.properties', ['properties' => $properties,'key'=>$key, 'ownersList' => $this->ownerService->get(['id', 'name']), 'owners' => $this->ownerService->getAll(), 'types' => $this->propertyService->getAllTypes()]);
        }
        return redirect()->route('admin.properties');


    }

    public function filter(Request $request)
    {
        $keys = $request->all();
        unset($keys['_token']);
        if ($keys != null && count($keys) > 0) {
            $properties = $this->propertyService->filter($keys);
            return view('pages.property-list', ['properties' => $properties]);
        }
        return redirect()->route('search');
    }

    public function userSearch(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $properties = $this->propertyService->userSearch($key);
            return view('pages.property-list', ['properties' => $properties, 'key' => $key]);
        }
        return redirect()->route('user.property.list');
    }

    public function createFeature(Request $request){
        $owner = $this->ownerService->getOwnersByPhonenumber($request->ownerPhonenumber);

        return view('pages.admin.properties', ['properties' => $owner->properties, 'owner' => $owner]);
    }
}
