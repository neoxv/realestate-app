<?php

namespace App\Services;

use App\Models\Document;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
use App\Interfaces\PropertyServiceInterface;
use App\Models\User;

class PropertyService implements PropertyServiceInterface
{
    public function getAll()
    {
        return Property::with(['owner','documents'])->paginate(5,['*'],'propertiesAllPage')->withQueryString();
    }

    public function getFeatured($page = null)
    {
        if($page != null){
            return Property::where('is_featured', true)->orderBy('updated_at','desc')->with(['documents', 'owner','users'])->paginate($page, ['*'], 'featuredClientPage')->withQueryString();
        }

        return Property::where('is_featured', true)->with(['documents', 'owner','users'])->get();
    }

    public  function get()
    {
        return Property::where('is_brokered', false)->where('status',true)->orderBy('updated_at', 'desc')->with(['documents','users'])->paginate(5, ['*'], 'listPage')->withQueryString();
    }

    public function getRecent($amount=5)
    {
        return Property::latest()->get()->take($amount);
    }

    public function getById($id)
    {
        return Property::find($id);
    }

    public function getByAttribute($attribute, $value,$with=['documents','users'],$page=5){
        return Property::where($attribute,$value)->orderBy('updated_at', 'desc')->with($with)->paginate($page,['*'],'byAttributePage')->withQueryString();
    }

    public function getFavourites($user)
    {
        return $user->properties()->paginate(6,['*'],'favouritesClientPage')->withQueryString();
    }

    public function favourite($propertyId, $userId){
        $property = Property::with('users')->find($propertyId);
        if(count($property->users) > 0){
           $property->users()->detach($userId);
            return [
                'success' => true,
                'favourite' => false,
                'icon' => $propertyId . 'icon'
            ];
        }else{
            $user = User::find($userId);
            $property->users()->attach($user);
            return [
                'success' => true,
                'favourite' => true,
                'icon' => $propertyId . 'icon'
            ];
        }
    }

    public function getAllFavourites()
    {
        return Property::has('users','>','0')->with('users')->withCount('users')->orderBy('users_count','desc')->paginate(5, ['*'], 'favouritesAllPage')->withQueryString();
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
            return (object) ['success' => true, 'message' => 'Property created successfully'];
        }else if($property){
            return (object) ['success' => true, 'message' => 'Property created successfully'];
        }

        return (object) ['success' => false, 'message' => 'Property creation failed.'];
    }

    public function update($id, $data)
    {
        $property = Property::find($id);
        $property->update($data);
        if ($property && array_key_exists('document', $data)) {
            foreach ($data['document'] as $key => $value) {
                $imageUpload = new Document();
                $imageUpload->filename = $value;
                $property->documents()->save($imageUpload);
            }
        }
        return (object) ['success' => true, 'message' => 'Property updated successfully'];

    }

    public function delete($property)
    {
        $property->delete();
        return (object) ['success' => true, 'message' => 'Property Deleted Successfully!'];
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
                    sum(profit) as profit_price,
                    type, count(is_brokered or null) as sold_count'),
        )
        // ->where('status', '=', true)
        ->groupBy('type')
        ->get();
        return $propertyCount;
    }

    public function getAllTypes(){
        return ['land','shop','house','building', 'apartment', 'warehouse'];
    }

    public function search($key){
        $property = Property::with('owner')->where(function ($query) use ($key) {

            $columns = ['name', 'city','address','type','number'];

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
        })->paginate(5, ['*'], 'propertiesAdminPage')->withQueryString();
        return $property;
    }

    public function searchFavourite($key){
        $property = Property::has('users', '>', '0')->with('users')->withCount('users')->where(function ($query) use ($key) {
            $columns = ['name', 'city', 'address', 'type','number'];
            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'favouritesSearchPage')->withQueryString();
        return $property;
    }

    public function searchFeatured($key){
        $property = Property::with('owner')->where('is_featured','1')->where(function ($query) use ($key) {
            $columns = ['name', 'city', 'address', 'type','number'];
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
        })->paginate(5, ['*'], 'featuredSearchPage')->withQueryString();
        return $property;
    }

    public function userSearch($key)
    {
        $property = Property::with(['documents','users'])->where(function ($query) use ($key) {

            $columns = ['name', 'city', 'address', 'type','price','subcity'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'propertiesSearchPage')->withQueryString();
        return $property;
    }

    public function filter($keys)
    {
        // dd($keys);
        $property = Property::where(function ($query) use ($keys) {
                foreach ($keys as $key => $value) {
                    if($key != 'page' &&  $key != 'min_price' && $key != 'max_price' && $key != 'min_area' && $key != 'max_area' && ($key != 'subcity' || ($key == 'subcity' && $keys['city'] == 'addis ababa' && $keys['subcity'] != 'all' ))){
                        $query->where($key, '=', $value);
                    }
                }

                $query->where('price', '>=', $keys['min_price']);
                $query->where('price', '<=', $keys['max_price']);
                $query->where('area', '>=', $keys['min_area']);
                $query->where('area', '<=', $keys['max_area']);
                $query->where('is_brokered', '=', 0);
        })->paginate(5)->withQueryString();
        return $property;
    }
}
