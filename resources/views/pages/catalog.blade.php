@extends('layouts.mainLayout')

@section('page', 'Catalogue')

@section('content')
@parent
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row-cols-3">
                <form action="{{ route('catalog') }}" method="GET">
                    <select name="sortBy" class="form-select mb-3" id="inputGroupSelect04">
                        <option selected>Selectionner le type de tri...</option>
                        <option value="name">Nom</option>
                        <option value="price">Prix</option>
                    </select>
                    <button class="btn btn:hover mb-4" type="submit">Trier</button>
                </form>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                    {{--@isset($_POST['price'])
                        {{$sorted = $products->sortBy('price')}}
                    @elseif($_POST['sortBy']==='name')
                        {{$sorted = $products->sortBy('name')}}
                    @endif--}}
                    <div class="card shadow-sm">
                        <div class="col">
                            <a href="{{ route('details', $product->id) }}">
                                <img src="{{ $product-> image }}" alt="{{ $product-> name }}" width="100%" />
                            </a>
                            <div class="card-body">
                                <a class="link link:hover " href="{{ route('details', $product->id) }}">
                                    <h4>{{ $product-> name }}</h4>
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm">Détails</button>
                                        <button type="button" class="btn btn-sm">Ajouter au panier</button>
                                    </div>
                                    <small class="text-muted">Prix : {{ $product-> price/100 }} €</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
