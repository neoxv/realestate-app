<?php

namespace App\Services;

use App\Models\Owner;
use Illuminate\Support\Facades\DB;
use App\Interfaces\OwnerServiceInterface;
use Illuminate\Database\Eloquent\Builder;


class OwnerService implements OwnerServiceInterface
{
    public function getAll()
    {
        return Owner::withCount(['properties','properties as sold_properties' => function(Builder $query){
            $query->where('is_brokered', "=",1);
        }])->paginate(5,['*'],'ownersPage')->withQueryString();
    }

    public function getById($id)
    {
        return Owner::find($id);
    }

    public function get($columns){
        if($columns != [] || $columns != null){
            return Owner::all($columns);
        }
        return Owner::all();
    }

    public function getOwnersByPhonenumber($phonenumber){
        return Owner::where('primary_phone',$phonenumber)->orWhere('secondary_phone',$phonenumber)->with('properties')->get();
    }

    public function create($data)
    {

        $owner = Owner::create($data);
        if ($owner) {
            return (object) ['success' => true, 'message' => 'Owner created successfully'];
        }

        return  (object) ['success' => false, 'message' => 'Owner creation failed'];
    }

    public function update($id, $data)
    {
        $owner = Owner::find($id);
        $owner->update($data);

        return (object) ['success' => true, 'message' => 'Owner created successfully'];
    }

    public function delete($owner){
        $owner->delete();
        return (object) ['success' => true, 'message' => 'Owner Deleted Successfully!'];
    }

    public function search($key)
    {
        $owners = Owner::where(function ($query) use ($key) {

            $columns = ['name', 'primary_phone', 'address', 'email', 'secondary_phone'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'ownersPage')->withQueryString();
        return $owners;
    }
}
