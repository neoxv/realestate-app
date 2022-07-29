<?php

namespace App\Services;

use App\Models\Document;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PropertyServiceInterface;

class PropertyService implements PropertyServiceInterface
{
    public function getAll()
    {
        return Property::with('owner')->paginate(5,['*'],'propertiesPage');
    }

    public function getFeatured($page = null)
    {
        if($page != null){
            return Property::where('is_featured', true)->with(['documents', 'owner'])->paginate($page, ['*'], 'featuredPage');
        }

        return Property::where('is_featured', true)->with(['documents', 'owner'])->get();
    }

    public  function get($columns = null,$joins = null,$paginate = true)
    {
        if ($columns != [] || $columns != null) {
            return Property::all($columns);
        }
        return Property::all();
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
        $property = Property::create($data);
        if($property && array_key_exists('document', $data)){
            foreach ($data['document'] as $key => $value) {
                $imageUpload = new Document();
                $imageUpload->filename = $value;
                $property->documents()->save($imageUpload);
            }
            return ['success' => true, 'message' => 'Property created successfully'];
        }

        return ['success' => false, 'message' => 'Property creation failed'];
    }

    public function update($id, $data)
    {
        $property = Property::find($id);
        $data['is_featured'] = true;
        $property->update($data);
        if($property){
            return (object) ['success' => true, 'message' => 'Property Updated Successfully!'];
        }

        return (object) ['success' => false, 'message' => 'Property creation failed'];
    }

    public function delete($id)
    {
        $property = Property::find($id);
        $property->delete();
        return $property;
    }

    public function getPropertyReportForDashboard()
    {
        $propertyCount = DB::table('properties')
       //  ->select(DB::raw('count(case when is_rental = false) as sale_count, count(case when is_rental = true) as rental_count', 'count(case when is_brokered = false) as transaction_count'))
        ->select(
            DB::raw('count(!is_brokered or null) as stock_count,
                    count((!is_rental and !is_brokered) or null) as sale_count,
                    count((is_rental and !is_brokered) or null) as rental_count,
                    sum(closing_price) as closing_price,
                    type, count(is_brokered or null) as sold_count'),
        )
        ->where('status', '=', true)
        ->groupBy('type')
        ->get();
        return $propertyCount;
    }

    public function getAllTypes(){
        return ['land','shop','house','building'];
    }

    public function search($key){
        $property = Property::with('owner')->where(function ($query) use ($key) {

            $columns = ['name', 'city','address','type'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }

            $query->orWhereHas('owner', function ($q) use ($key) {
                $q->where(function ($q) use ($key) {
                    $q->orWhere('name', 'LIKE', '%' . $key . '%');
                    $q->orWhere('email', 'LIKE', '%' . $key . '%');
                    $q->orWhere('primary_phone', 'LIKE', '%' . $key . '%');
                    $q->orWhere('secondary_phone', 'LIKE', '%' . $key . '%');
                });
            });
        })->paginate(5, ['*'], 'propertiesPage');
        return $property;
    }
}
