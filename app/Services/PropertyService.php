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
        return Property::with(['owner'])->paginate(5,['*'],'propertiesPage');
    }

    public function getFeatured($page = null)
    {
        if($page != null){
            return Property::where('is_featured', true)->with(['documents', 'owner','users'])->paginate($page, ['*'], 'featuredPage');
        }

        return Property::where('is_featured', true)->with(['documents', 'owner','users'])->get();
    }

    public  function get()
    {
        return Property::where('is_brokered', false)->where('status',true)->with(['documents','users'])->paginate(5, ['*'], 'listPage');;
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
        return Property::where($attribute,$value)->with($with)->paginate($page,['*'],'byAttributePage');
    }

    public function getFavourites($user)
    {
        return $user->properties()->paginate(6,['*'],'favouritesPage');
        //or should we just use properties->with users
    }

    public function favourite($propertyId, $userId){
        $property = Property::with('users')->find($propertyId);

        //check after having multiple users favorite a specfic property what
        //these will return
        //dd($property->users)
        //if property users contain the specific user id then detach the user like
        //    $property->users()->detach($user_id);
        //the make favourite false and icon null
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
        return ['land','shop','house','building', 'apartment', 'warehouse'];
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

    public function userSearch($key)
    {
        $property = Property::with(['documents','users'])->where(function ($query) use ($key) {

            $columns = ['name', 'city', 'address', 'type','price','subcity'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'propertiesPage');
        return $property;
    }

    public function filter($keys)
    {
        $property = Property::where(function ($query) use ($keys) {
                foreach ($keys as $key => $value) {
                    if($key != 'min_price' && $key != 'max_price' && $key != 'min_area' && $key != 'max_area' && ($key != 'subcity' || ($key == 'subcity' && $keys['city'] == 'addis ababa'))){
                        $query->where($key, '=', $value);
                    }
                }

                $query->where('price', '>=', $keys['min_price']);
                $query->where('price', '<=', $keys['max_price']);
                $query->where('area', '>=', $keys['min_area']);
                $query->where('area', '<=', $keys['max_area']);
                $query->where('is_brokered', '=', 0);
        })->paginate(5, ['*'], 'propertiesPage');
        return $property;
    }
}
