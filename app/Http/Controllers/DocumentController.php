<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        return view('new-doc'); // Return view for creating a new document
    }

    public function store(Request $request)
    {
        // Your logic for saving the document, for example:
        // $document = new Document;
        // $document->title = $request->input('title');
        // $document->content = $request->input('content');
        
    }
    
}
