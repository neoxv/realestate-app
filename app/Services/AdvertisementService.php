<?php

namespace App\Services;

use App\Interfaces\AdvertisementServiceInterface;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Models\Document;
use Illuminate\Database\Eloquent\Builder;


class AdvertisementService implements AdvertisementServiceInterface
{
    public function getAll()
    {
        return Advertisement::with(['client'])->paginate(5, ['*'], 'advertisementPage');
    }

    public function getActiveAdvertisements()
    {
        return Advertisement::where('status', true)->with(['documents'])->get();
    }

    public function getById($id)
    {
        return Advertisement::find($id);
    }

    public function get($columns)
    {

    }

    public function create($data)
    {
        $advertisement = Advertisement::create($data);
        if ($advertisement && array_key_exists('document', $data)){
                foreach ($data['document'] as $key => $value) {
                    $imageUpload = new Document();
                    $imageUpload->filename = $value;
                    $advertisement->documents()->save($imageUpload);
                }
            return ['success' => true, 'message' => 'Advertisement created successfully'];
        }

        return ['success' => false, 'message' => 'Advertisement creation failed'];
    }
}
