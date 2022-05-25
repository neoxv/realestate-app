<?php

namespace App\Services;

use App\Models\Property;
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
}
