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
        $photos = Photo::paginate(5);
        return view('index', [
            'photos' => $photos,
            'categories' => $categories,
        ]);
    }
}
