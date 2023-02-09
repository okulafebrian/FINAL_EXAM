<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function __invoke()
    {
        if (auth()->check()) {
            return view('home', [
                'items' => Item::doesntHave('cart')->doesntHave('order')->paginate(10),
            ]);
        } else {
            return view('welcome');
        }
    }
}
