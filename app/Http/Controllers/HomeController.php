<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('home', [
            'items' => Item::latest()->paginate(10),
        ]);
    }
}
