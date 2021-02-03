@extends('layouts.layout')

@section('title', 'Produits')

@section('content')
    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($products as $item)
                    <a href="{{ route('product-detail', $item->id) }}">
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                </div>
                                <div class="col me-2 align-self-end">
                                    <h4>Prix : {{ $item->price }} €</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

        </div>
    </div>
@endsection
