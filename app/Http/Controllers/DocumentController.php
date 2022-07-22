<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image[0]->getClientOriginalName();
        $location = $request->location ?? 'img';
        $image[0]->move(public_path($location), $imageName);
        return response()->json(['success' => true, 'image' => $imageName]);
    }


    public function show(Document $document)
    {
        //
    }


    public function edit(Document $document)
    {
        //
    }


    public function update(Request $request, Document $document)
    {
        //
    }


    public function destroy(Document $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename', $filename)->delete();
        $location = $request->location??'img';
        $path = public_path() . $location . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
