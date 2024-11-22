<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Photo;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $photos = Photo::all();
        return view('index', [
            'photos' => $photos,
            'categories' => $categories,
        ]);
    }
}
