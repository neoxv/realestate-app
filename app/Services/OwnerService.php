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
}
