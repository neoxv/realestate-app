<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\admin\OwnerCreateRequest;
use App\Interfaces\DocumentServiceInterface;
use App\Interfaces\OwnerServiceInterface;
use App\Interfaces\PropertyServiceInterface;

class OwnerController extends Controller
{
    private OwnerServiceInterface $ownerService;
    private DocumentServiceInterface $documentService;
    private PropertyServiceInterface $propertyService;

    public function __construct(OwnerServiceInterface $ownerService, DocumentServiceInterface $documentService,PropertyServiceInterface $propertyService)
    {
        $this->ownerService = $ownerService;
        $this->propertyService = $propertyService;
        $this->documentService = $documentService;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(OwnerCreateRequest $request)
    {
        $response = $this->ownerService->create($request->all());

        if ($response->success) {
            return redirect()->route('admin.properties')->with('success', $response->message);
        }
        return redirect()->route('admin.properties')->with('error', $response->message);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }


    public function search(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $owners = $this->ownerService->search($key);
            return view('pages.admin.properties', ['properties' =>$this->propertyService->getAll(), 'key' => $key,'subject'=>'owner', 'ownersList' => $this->ownerService->get(['id', 'name']), 'owners' => $owners, 'types' => $this->propertyService->getAllTypes()]);
        }
        return redirect()->route('admin.properties');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        if (isset($request['id']) && $request['id'] != '') {
            $response = $this->ownerService->update($request->id, $request->all());
            if ($response->success) {
                return redirect()->route('admin.properties')->with('success', $response->message);
            }
            return redirect()->route('admin.properties')->with('error', $response->message);
        }else{
            return redirect()->route('admin.properties');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $properties = $owner->properties;
        foreach ($properties as $property) {
            $documents = $property->documents;
            foreach ($documents as $document) {
                $this->documentService->destroy($document->filename, 'img/properties');
            }
            $response = $this->propertyService->delete($property);
        }
        $this->ownerService->delete($owner);
        if ($response->success) {
            return redirect()->route('admin.properties')->with('success', $response->message);
        } else {
            return redirect()->route('admin.properties')->with('error', $response->message);
        }
    }
}
