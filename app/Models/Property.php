<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $appends = ['profit'];

    protected function getProfitAttribute()
    {
        if($this->is_sold) {
            return $this->closing_price - $this->price;
        }
        return 0.0;
    }
}
