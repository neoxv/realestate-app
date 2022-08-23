<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        $setting = Setting::first()->with('documents')->first();
        if($setting){
            config([
                'app.name' => strtoupper($setting->app_name),
                'app.logo' => $setting->documents->filename,
                'app.facebook' => $setting->facebook,
                'app.youtube' => $setting->youtube,
                'app.tiktok' => $setting->tiktok,
                'app.telegram' => $setting->telegram,
                'app.email' => $setting->email,
                'app.phone' => $setting->primary_phone,
                'app.address' => $setting->address
            ]);
        }
        return $next($request);
    }
}
