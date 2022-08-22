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
            return (object) ['success' => true, 'message' => 'Advertisement created successfully'];
        }

        return (object) ['success' => false, 'message' => 'Advertisement creation failed'];
    }

    public function update($id, $data){
        $advertisement = Advertisement::find($id);
        if ($advertisement) {
            $advertisement->update($data);
            if(array_key_exists('document', $data)){
                foreach ($data['document'] as $key => $value) {
                    $imageUpload = new Document();
                    $imageUpload->filename = $value;
                    $advertisement->documents()->save($imageUpload);
                }
            return (object) ['success' => true, 'message' => 'Advertisement updated successfully'];
            }
            return (object) ['success' => true, 'message' => 'Advertisement updated successfully'];
        }
        return (object) ['success' => false, 'message' => 'Advertisement update failed'];
    }

    public function delete($advertisement){
        $advertisement->delete();
        return (object) ['success' => true, 'message' => 'Advertisement deleted successfully'];
    }

    public function search($key)
    {
        $advertisements = Advertisement::where(function ($query) use ($key) {

            $columns = ['title', 'link'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'advertisementsPage');
        return $advertisements;
    }
}
