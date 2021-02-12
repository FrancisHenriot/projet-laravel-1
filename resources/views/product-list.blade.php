@extends('layouts.layout')

@section('title', 'Produits')

@section('content')
    <form action="{{ route('product-list') }}" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Trier par : </label>
                        <select name="sortBy" class="form-select" id="inputGroupSelect01">
                            <option selected>Selectionner le type de tri...</option>
                            <option value="name">Nom</option>
                            <option value="price">Prix</option>
                        </select>
                        <button class="btn my-0" type="submit" style="width:auto">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($products as $product)
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row justify-content-end">
                                        <div class="col-8">
                                            <a href="{{ route('product-detail', $product->id) }}">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                            </a>
                                            <p class="card-text">{{ $product->description }}</p>
                                            <p class="card-text">Catégorie : {{ $product->categorie->name }}</p>
                                        </div>
                                        <div class="col-2 align-self-end mx-auto">
                                            <button class="btn" type="submit" style="width: auto">
                                                <svg class="img-button" width="40" height="40" viewBox="0 0 88 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M23.5469 58.7957H71.9481L79.3115 32.9754C84.5168 30.094 88 24.8859 88 18.952C88 9.90556 79.9042 2.54572 69.9531 2.54572C60.0021 2.54572 51.9062 9.90556 51.9062 18.952C51.9062 21.4668 52.5327 23.851 53.6499 25.9832H23.8961L20.4586 11.9207H0V16.6082H16.3226L25.4892 54.1082H23.5469C19.2821 54.1082 15.8125 57.2624 15.8125 61.1395C15.8125 65.0165 19.2821 68.1707 23.5469 68.1707H26.5684C26.2823 68.9043 26.125 69.6929 26.125 70.5145C26.125 74.3915 29.5946 77.5457 33.8594 77.5457C38.1241 77.5457 41.5938 74.3915 41.5938 70.5145C41.5938 69.6929 41.4365 68.9043 41.1503 68.1707H52.3497C52.0635 68.9043 51.9062 69.6929 51.9062 70.5145C51.9062 74.3915 55.3759 77.5457 59.6406 77.5457C63.9054 77.5457 67.375 74.3915 67.375 70.5145C67.375 69.6929 67.2177 68.9043 66.9316 68.1707H72.5312V63.4832H23.5469C22.1253 63.4832 20.9688 62.4318 20.9688 61.1395C20.9688 59.8471 22.1253 58.7957 23.5469 58.7957ZM30.7711 54.1082L28.4795 44.7332H39.2215L40.0809 54.1082H30.7711ZM54.2606 44.7332L53.4012 54.1082H45.255L44.3957 44.7332H54.2606ZM43.966 40.0457L43.1066 30.6707H55.5497L54.6903 40.0457H43.966ZM58.5753 54.1082L59.4347 44.7332H70.6317L67.958 54.1082H58.5753ZM71.9685 40.0457H59.8644L60.5167 32.931C63.2641 34.4695 66.4964 35.3582 69.9531 35.3582C71.1286 35.3582 72.2776 35.2543 73.391 35.0584L71.9685 40.0457ZM69.9531 7.23322C77.061 7.23322 82.8438 12.4902 82.8438 18.952C82.8438 25.4137 77.061 30.6707 69.9531 30.6707C62.8452 30.6707 57.0625 25.4137 57.0625 18.952C57.0625 12.4902 62.8452 7.23322 69.9531 7.23322ZM37.9325 30.6707L38.7918 40.0457H27.3336L25.042 30.6707H37.9325ZM36.4375 70.5145C36.4375 71.8068 35.281 72.8582 33.8594 72.8582C32.4378 72.8582 31.2812 71.8068 31.2812 70.5145C31.2812 69.2221 32.4378 68.1707 33.8594 68.1707C35.281 68.1707 36.4375 69.2221 36.4375 70.5145ZM62.2188 70.5145C62.2188 71.8068 61.0622 72.8582 59.6406 72.8582C58.219 72.8582 57.0625 71.8068 57.0625 70.5145C57.0625 69.2221 58.219 68.1707 59.6406 68.1707C61.0622 68.1707 62.2188 69.2221 62.2188 70.5145Z"/>
                                                    <path d="M67.375 25.9832H72.5312V21.2957H77.6875V16.6082H72.5312V11.9207H67.375V16.6082H62.2188V21.2957H67.375V25.9832Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" me-2 align-self-end">
                                <h4>Prix : {{ $product->price }} €</h4>
                            </div>
                        </div>
                    </div>

            @endforeach
        </div>
    </div>
@endsection
