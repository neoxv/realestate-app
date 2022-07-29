<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function documents()
    {
        return $this->morphOne(Document::class, 'documentable')->withDefault();
    }
}

