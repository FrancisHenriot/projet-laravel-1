@extends('layouts.backofficeLayout')

@section('page', 'Backoffice')

@section('form')
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="" action="{{ route('addProduct') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <h2>Ajout d'un nouvel article</h2>
                    <label for="name">Nom de l'article</label>
                    <input type="text" value="@yield('productName')" class="form-control" name="name" placeholder="Saisir un nom">
                </div>
                <div class="form-group">
                    <label for="price">Prix de l'article</label>
                    <input type="text" value="@yield('productPrice')" class="form-control" name="price" placeholder="Saisir un prix">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité de l'article</label>
                    <input type="text" value="@yield('productQuantity')" class="form-control" name="quantity" placeholder="Saisir une quantité">
                </div>
                <div class="form-group">
                    <label for="category">Categorie de l'article</label>
                    <input type="text" value="@yield('productCategory')" class="form-control" name="category" placeholder="Saisir une categorie">
                </div>
                <div class="form-group">
                    <label for="category">Description de l'article</label>
                    <textarea name="description"  class="form-control" rows="3" placeholder="Description de l'article">@yield('productDescription')</textarea>
                </div>
                <div>
                    <button class="btn btn-light col-auto" type="submit" name="add">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('list')
    <div class="row">
        <div class="col-xs-12 mt-3">
            <ol class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <div class="row px-2" >
                            {{$product->id}}
                            <span class="col-auto">{{ $product->name }}</span>
                            <span class="col-auto">prix : {{ $product->price }}</span>
                            <span class="col-auto">quantité : {{$product->quantity}}</span>
                            <a href="{{ route('editProduct', $product) }}" class="col-auto"><span class="col-auto">Modifier</span></a>
                            <a href="{{ route('deleteProduct', $product) }}" class="col-auto"><img src="{{ asset('image/trash.svg') }}"></a>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection
