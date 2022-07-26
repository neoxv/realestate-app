<?php

namespace App\Services;

use App\Models\Setting;
use App\Models\Document;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Interfaces\SettingServiceInterface;


class SettingService implements SettingServiceInterface
{
    public function getAll()
    {
        return Setting::with('documents')->first();
    }

    public function getById($id)
    {
        return Setting::find($id);
    }

    public function get($columns)
    {
    }

    public function getSettingsByPhonenumber($phonenumber)
    {
    }

    public function create($data)
    {
        $setting = Setting::updateOrCreate(['id'=>1],$data);
        if ($setting) {
            // dd($data['document']);
            foreach ($data['document'] as $key => $value) {
                $imageUpload = new Document();
                $imageUpload->filename = $value;
                $setting->documents()->save($imageUpload);
            }
            return ['success' => true, 'message' => 'Property created successfully'];
        }

        if ($setting) {
            return ['success' => true, 'message' => 'Setting created successfully'];
        }

        return ['success' => false, 'message' => 'Setting creation failed'];
    }
}
