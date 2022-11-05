<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Interfaces\ClientServiceInterface;
use App\Interfaces\AdvertisementServiceInterface;
use App\Interfaces\DocumentServiceInterface;
use App\Interfaces\PropertyServiceInterface;

class AdvertisementController extends Controller
{
    private AdvertisementServiceInterface $advertisementService;
    private ClientServiceInterface $clientService;
    private PropertyServiceInterface $propertyService;
    private DocumentServiceInterface $documentService;

    public function __construct(AdvertisementServiceInterface $advertisementService, ClientServiceInterface $clientService, DocumentServiceInterface $documentService, PropertyServiceInterface $propertyService)
    {
        $this->advertisementService = $advertisementService;
        $this->clientService = $clientService;
        $this->documentService = $documentService;
        $this->propertyService = $propertyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $response = $this->advertisementService->create($request->all());
        if ($response->success) {
            return redirect()->route('admin.advertisements')->with('success', $response->message);
        }
        return redirect()->route('admin.advertisements')->with('error', $response->message);
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
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    public function search(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $advertisements = $this->advertisementService->search($key);
            return view('pages.admin.advertisements', ['advertisements' => $advertisements, 'key' => $key, 'subject' => 'advertisement', 'featured' => $this->propertyService->getFeatured(5), 'clients' => $this->clientService->getAll()]);
        }
        return redirect()->route('admin.advertisements');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (isset($request->id)) {
            if (isset($request['document'])) {
                $documents = (Advertisement::with('documents')->where('id', $request->id)->first())->documents;
                foreach ($documents as $document) {
                    $this->documentService->destroy($document->filename, 'img/ads');
                }
            }
            $response = $this->advertisementService->update($request->id, $request->all());
            if ($response->success) {
                return redirect()->route('admin.advertisements')->with('success', $response->message);
            }
        }

        return redirect()->route('admin.advertisements')->with('error','Error updating advertisement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $documents = $advertisement->documents;
        foreach ($documents as $document) {
            $this->documentService->destroy($document->filename, 'img/ads');
        }
        $response = $this->advertisementService->delete($advertisement);
        if ($response->success) {
            return redirect()->route('admin.advertisements')->with('success', $response->message);
        } else {
            return redirect()->route('admin.advertisements')->with('error', $response->message);
        }
    }
}
