@extends('layouts.backofficeLayout')

@section('page', 'Backoffice - Liste des articles')

@section('form')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Mes articles</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{ route('pages.backoffice.products.create') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <h3>Ajout d'un nouvel article</h3>
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
                <button class="btn" type="submit" name="add" @yield('addBtnStatus')>Ajouter</button>
            </form>
        </div>
    </div>
@endsection

@section('list')
    <div class="container">
        <h2>Liste des produits</h2>
        <div class="row">
            <div class="col-xs-12">
                <ol class="list-group">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                {{$product->id}}
                                <a href="{{ route('product.edit', $product->id) }}">
                                    {{$product->name}}
                                </a>
                                prix : {{$product->price}}
                                quantité : {{$product->quantity}}
                            </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
