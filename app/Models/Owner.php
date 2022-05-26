<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'primary_phone',
        'secondary_phone',
        'address',
        'email',
    ];

    public function properties(){
        return $this->hasMany(Property::class);
    }
}
