<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Support\Facades\DB;
use App\Interfaces\ClientServiceInterface;
use Illuminate\Database\Eloquent\Builder;


class ClientService implements ClientServiceInterface
{
    public function getAll()
    {
        return Client::withCount(['advertisements'])->paginate(5, ['*'], 'clientPage');
    }

    public function getById($id)
    {
        return Client::find($id);
    }

    public function get($columns)
    {

    }

    public function getClientsByPhonenumber($phonenumber)
    {

    }

    public function create($data)
    {
        $client = Client::create($data);
        if ($client) {
            return ['success' => true, 'message' => 'Client created successfully'];
        }

        return ['success' => false, 'message' => 'Client creation failed'];
    }
}
