<?php

namespace App\Models;

use App\Models\User;
use App\Models\Owner;
use App\Models\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($property) {
            $largestNumber = Property::max('number');
            if($largestNumber == null || $largestNumber == 0) {
                $largestNumber = 1000;
            }
            $property->number = $largestNumber + 1;
        });
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function documents(){
        return $this->morphMany(Document::class,'documentable');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->when(auth()->check() && !auth()->user()->isAdmin(), function ($query) {
            $query->where('user_id', auth()->user()->id);
        });
    }
}
