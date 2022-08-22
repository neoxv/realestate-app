<?php

namespace App\Services;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\DocumentServiceInterface;


class DocumentService implements DocumentServiceInterface
{
    public function get($columns)
    {
    }

    public function create($image, $location = 'img')
    {
        if (is_array($image)) {
            foreach ($image as $img) {
                $imageName = $img->getClientOriginalName();
                $path = $img->storeAs('public/'.$location,$imageName);

            }
        } else {
            $imageName = $image->getClientOriginalName();
            $path = $image->storeAs('public/'.$location, $imageName);
        }
        return $imageName;
    }

    public static function destroy($filename, $location = 'img')
    {
        try {
            Document::where('filename', $filename)->delete();
            if (Storage::disk('public')->exists($location . '/' . $filename)) {
                Storage::disk('public')->delete($location . '/' . $filename);
            }
            return ['success' => true, 'message' => 'Client created successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' =>  $e->getMessage()];
        }

    }
}
