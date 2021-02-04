<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function store(TagRequest $request)
    {
        Tag::create($request->all());
        return redirect('/');
    }
    public function destroy(Tag $tag)
    { 
        $tag->delete();
        return back();
    }
        
}
