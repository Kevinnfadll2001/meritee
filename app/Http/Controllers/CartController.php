<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                'name'  => $request->name,
                'price' => $request->price,
                'image' => $request->image,
                'qty'   => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        $cart[$request->id]['qty'] = $request->qty;
        session()->put('cart', $cart);
        return back();
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->id]);
        session()->put('cart', $cart);
        return back();
    }
}
