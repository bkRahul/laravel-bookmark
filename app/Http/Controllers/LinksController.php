<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;

class LinksController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255'
    ]);
    
    Link::create($data);
        
    return redirect('/');
    }

    public function show()
    {
        $links = Link::all();
        return view('links', compact('links'));
    }
}
