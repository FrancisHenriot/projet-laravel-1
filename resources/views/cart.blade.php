@extends('layouts.layout')

@section('title', 'Panier')

@section('content')
    <div class="container" style="min-height: 600px">
        <h1>Détail du panier</h1>
        @if (!$order->id == NULL)
            @php ($total=0)
            <p>Id de la commande : {{ $order->id }}</p>
            <p>Commandé par : {{ $order->customer->first_name. ' '.$order->customer->last_name }}</p>
            @foreach ($order->products as $product)
                @include('includes.cart-element')
            @endforeach
            <p>Total = {{ $total }} €</p>
        @else
            <p>Pas de commande en cours</p>
        @endif
    </div>
@endsection
