<?php

namespace App\Http\Controllers;

use App\Interfaces\ClientServiceInterface;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private ClientServiceInterface $clientService;

    public function __construct(ClientServiceInterface $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $response = $this->clientService->create($request->all());
        if ($response['success']) {
            return redirect()->route('admin.advertisements')->with('success', $response['message']);
        }
        return redirect()->route('admin.advertisements')->with('error', $response['message']);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
