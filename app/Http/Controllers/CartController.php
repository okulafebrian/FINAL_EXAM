<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('carts.index', [
            'carts' => Cart::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Cart::create([
            'user_id' => auth()->user()->id,
            'item_id' => $request->item_id,
            'price' => $request->price
        ]);

        return redirect()->route('home')->with('success', 'Item successfully added to cart.');
    }

    public function show(Cart $cart)
    {
        //
    }

    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return redirect()->back()->with('success', 'Item successfully removed from cart.');
    }
}
