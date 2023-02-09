<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        foreach (auth()->user()->carts as $cart) {
            Order::create([
                'user_id' => auth()->user()->id,
                'item_id' => $cart->item_id,
                'price' => $cart->price
            ]);

            $cart->delete();
        }
        
        return redirect()->route('carts.index')->with('success', 'Success! We will contact you 1x24 hours.');
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->back()->with('success', 'Item successfully removed from cart.');
    }
}
