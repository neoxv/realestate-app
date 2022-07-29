<?php

namespace App\Models;

use App\Models\Owner;
use App\Models\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    protected $appends = ['profit'];
    protected $guarded = ['id'];

    protected function getProfitAttribute()
    {
        if($this->is_brokered) {
            return $this->closing_price * 0.2;
        }
        return 0.0;
    }


    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function documents(){
        return $this->morphMany(Document::class,'documentable');
    }
}
