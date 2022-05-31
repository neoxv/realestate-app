<?php

namespace App\Services;

use App\Models\Property;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PropertyServiceInterface;

class PropertyService implements PropertyServiceInterface
{
    public function getAll()
    {
        return Property::all();
    }

    public function getFeatured()
    {
        return Property::where('is_featured', true)->get();
    }

    public function getRecent()
    {
        return Property::latest()->get()->take(4);
    }

    public function getById($id)
    {
        return Property::find($id);
    }

    public function create($data)
    {
        return Property::create($data);
    }

    public function update($id, $data)
    {
        $property = Property::find($id);
        $property->update($data);
        return $property;
    }

    public function delete($id)
    {
        $property = Property::find($id);
        $property->delete();
        return $property;
    }

    public function getUserCountByMonth($month)
    {
        return Property::whereMonth('created_at', $month)->count();
    }

    public function getPropertyCountForDashboard()
    {
        return  DB::table('properties')
       //  ->select(DB::raw('count(case when is_rental = false) as sale_count, count(case when is_rental = true) as rental_count', 'count(case when is_brokered = false) as transaction_count'))
        ->select(
            DB::raw('count(!is_brokered or null) as transaction_count'),
            DB::raw('count(!is_rental or null) as sale_count'),
            DB::raw('count(is_rental or null) as rental_count'),
        )
        ->where('status', '=', true)
        ->get();
    }
}
