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
        }])->paginate(5,['*'],'ownersPage');
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
            return ['success' => true, 'message' => 'Owner created successfully'];
        }

        return ['success' => false, 'message' => 'Owner creation failed'];
    }
}
