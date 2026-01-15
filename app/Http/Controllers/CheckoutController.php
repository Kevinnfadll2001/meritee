<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);

        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        return view('pages.checkout', compact('cart', 'total'));
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'country' => 'required',
            'city'    => 'required',
        ]);

        $cart = session('cart', []);
        $total = collect($cart)->sum(function ($item) {
    $qty = isset($item['quantity']) ? (int)$item['quantity'] : 1;
    $price = isset($item['price']) ? (float)$item['price'] : 0;
    return $price * $qty;
});


        $order = Order::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'country' => $request->country,
            'city'    => $request->city,
            'address' => $request->address,
            'cart'    => $cart,
            'total'   => $total,
        ]);

        Mail::send('emails.order-confirmation', compact('order'), function ($message) {
            $message->to('kevinfadel15@gmail.com')
                    ->subject('New Meritee Order');
        });

        session()->forget('cart');

        return redirect('/')->with('success', 'Order confirmed successfully!');
    }
}
