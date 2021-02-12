@extends('layouts.layout')

@section('title', 'Panier')

@section('content')
    <h1>Détail du panier</h1>
    {{-- @dd($order) --}}
    <p>{{ (!empty($order)) ? $order->id : 'Pas de commande' }}</p>
    <p>{{ (!empty($order)) ? $order->customer->first_name : 'Pas de commande' }}</p>
@endsection
