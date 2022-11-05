<?php

namespace App\Http\Controllers;

use App\Interfaces\AdvertisementServiceInterface;
use App\Interfaces\ClientServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private ClientServiceInterface $clientService;
    private AdvertisementServiceInterface $advertisementService;
    private PropertyServiceInterface $propertyService;

    public function __construct(ClientServiceInterface $clientService, AdvertisementServiceInterface $advertisementService, PropertyServiceInterface $propertyService)
    {
        $this->clientService = $clientService;
        $this->advertisementService = $advertisementService;
        $this->propertyService = $propertyService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $response = $this->clientService->create($request->all());
        if ($response->success) {
            return redirect()->route('admin.advertisements')->with('success', $response->message);
        }
        return redirect()->route('admin.advertisements')->with('error', $response->message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }


    public function search(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $clients = $this->clientService->search($key);
            return view('pages.admin.advertisements', ['clients' => $clients, 'key' => $key, 'subject' => 'client','featured' => $this->propertyService->getFeatured(5), 'advertisements' => $this->advertisementService->getAll()]);
        }
        return redirect()->route('admin.advertisements');
    }

    public function update(Request $request, Client $client)
    {
        if (isset($request['id']) && $request['id'] != '') {
            $response = $this->clientService->update($request->id, $request->all());
            if ($response->success) {
                return redirect()->route('admin.advertisements')->with('success', $response->message);
            }
            return redirect()->route('admin.advertisements')->with('error', $response->message);
        }
            return redirect()->route('admin.advertisements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $response = $this->clientService->delete($client);
        if ($response->success) {
            return redirect()->route('admin.advertisements')->with('success', $response->message);
        } else {
            return redirect()->route('admin.advertisements')->with('error', $response->message);
        }
    }
}
