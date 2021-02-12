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
                    <div class="card shadow-sm">
                        <div class="col">
                            <form action="{{ route('details', $product) }}" method="get">
                                <button class="border-0 bg-white w-auto" type="display-details"><img src="{{ $product-> image }}" alt="{{ $product-> name }}" width="100%"/></button>
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" d-flex justify-content-end">
                                            @if($product->category)
                                                <span class="col-auto">Catégorie : {{$product->category->name}}</span>
                                            @endif
                                        </div>
                                        <button class="col-auto border-0 bg-white w-auto" type="display-details"><h5>{{ $product-> name }}</h5></button>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button class="btn bg-white" type="display-details">Détails</button>
                                            <button type="button" class="btn btn-sm">Ajouter au panier</button>
                                        </div>
                                        <small class="text-muted">Prix : {{ $product-> price/100 }} €</small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
