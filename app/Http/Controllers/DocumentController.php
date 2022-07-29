<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Interfaces\DocumentServiceInterface;

class DocumentController extends Controller
{
    private DocumentServiceInterface $documentService;

    public function __construct(DocumentServiceInterface $documentService)
    {
        $this->documentService = $documentService;
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $response = $this->documentService->create($image,$request->location);

        return response()->json(['success' => true, 'image' => $response]);
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
        $response = $this->documentService->destroy($filename, $request->location);
        return $filename;
    }
}
