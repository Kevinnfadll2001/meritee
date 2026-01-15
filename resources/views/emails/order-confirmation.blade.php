<h2>New Meritee Order</h2>

<p><strong>Name:</strong> {{ $order->name }}</p>
<p><strong>Phone:</strong> {{ $order->phone }}</p>
<p><strong>Email:</strong> {{ $order->email }}</p>
<p><strong>Location:</strong> {{ $order->country }}, {{ $order->city }}</p>
<p><strong>Address:</strong> {{ $order->address }}</p>

<hr>

<h3>Order Items</h3>

@foreach($order->cart as $item)
    <p>
        {{ $item['name'] }} — 
       @php($qty = $item['quantity'] ?? 1)
{{ $qty }} × ${{ $item['price'] ?? 0 }}
    </p>
@endforeach

<hr>
<h3>Total: ${{ $order->total }}</h3>
