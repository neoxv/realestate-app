<?php

namespace App\Services;

use App\Models\Setting;
use App\Models\Document;
use App\Services\DocumentService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        if ($setting && array_key_exists('document',$data)) {
            $setting->documents()->delete();
            foreach ($data['document'] as $key => $value) {
                $imageUpload = new Document();
                $imageUpload->filename = $value;
                $setting->documents()->save($imageUpload);
            }
            $storage = Storage::disk('public');
            foreach ($storage->files('img/settings') as $file) {
                if (basename($file) != $setting->documents->filename) {
                    $storage->delete($file);
                }
            }
            return (object) ['success' => true, 'message' => 'Property created successfully'];
        }

        if ($setting) {
            return (object) ['success' => true, 'message' => 'Setting created successfully'];
        }

        return (object) ['success' => false, 'message' => 'Setting creation failed'];
    }
}
