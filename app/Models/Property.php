<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
