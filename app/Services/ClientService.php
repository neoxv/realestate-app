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
        return Client::withCount(['advertisements'])->paginate(5, ['*'], 'clientPage')->withQueryString();
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
            return (object) ['success' => true, 'message' => 'Client created successfully'];
        }

        return (object) ['success' => false, 'message' => 'Client creation failed'];
    }

    public function delete($client){
        $client->delete();
        return (object) ['success' => true, 'message' => 'Client deleted successfully.'];
    }

    public function search($key){
        $clients = Client::where(function ($query) use ($key) {

            $columns = ['name', 'phonenumber'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'clientsPage')->withQueryString();
        return $clients;
    }

    public function update($id,$data){
        $client = Client::find($id);
        $client->update($data);

        return (object) ['success' => true, 'message' => 'Client created successfully'];
    }
}
