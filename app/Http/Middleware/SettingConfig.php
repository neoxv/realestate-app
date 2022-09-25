<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Setting;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Builder;

class SettingConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $setting = Cache::rememberForever('appSetting',function () {
           return Setting::first();
        });
        $logo = Cache::rememberForever('appLogo', function () use ($setting){
            return Document::whereHasMorph(
                'documentable',
                [Setting::class],
                function (Builder $query) use ($setting) {
                    $query->where('documentable_id', '=', $setting->id);
                }
            )->first();
        });

        if($setting){
            config([
                'app.name' => strtoupper($setting->app_name),
                'app.logo' => $logo?->filename,
                'app.facebook' => $setting->facebook,
                'app.youtube' => $setting->youtube,
                'app.tiktok' => $setting->tiktok,
                'app.telegram' => $setting->telegram,
                'app.email' => $setting->email,
                'app.phone' => $setting->primary_phone,
                'app.address' => $setting->address,
                'app.description' => $setting->description
            ]);
        }
        return $next($request);
    }
}
