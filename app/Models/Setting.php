<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($setting) {
            $logo = Document::whereHasMorph(
                'documentable',
                [Setting::class],
                function (Builder $query) use ($setting) {
                    $query->where('documentable_id', '=', $setting->id);
                }
            )->first();
            Cache::forget('appSetting');
            Cache::forget('appLogo');
            Cache::forever('appSetting', $setting);
            Cache::forever('appLogo', $logo);
        });

        static::updated(function ($setting) {
            $logo = Document::whereHasMorph(
                'documentable',
                [Setting::class],
                function (Builder $query) use ($setting) {
                    $query->where('documentable_id', '=', $setting->id);
                }
            )->first();
            Cache::forget('appSetting');
            Cache::forget('appLogo');
            Cache::forever('appSetting', $setting);
            Cache::forever('appLogo', $logo);
        });
    }

    public function documents()
    {
        return $this->morphOne(Document::class, 'documentable')->withDefault();
    }
}

