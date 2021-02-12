@extends('layouts.backofficeLayout')

@section('page', 'Backoffice - Modification')

@section('form')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Mes articles</h2>
        </div>
        <div class="panel-body">
            <form class="" action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom de l'article</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Nome de l'article">
                </div>
                <div class="form-group">
                    <label for="price">Prix de l'article</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}" placeholder="Saisir un prix">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité de l'article</label>
                    <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" placeholder="Saisir une quantité">
                </div>
                <div class="form-group">
                    <label for="category">Categorie de l'article</label>
                    <input type="number" class="form-control" name="category" value="{{ $product->category }}" placeholder="Saisir une categorie">
                </div>
                <div>
                    <label for="category">Categorie de l'article</label>
                    <textarea name="description"  class="form-control" placeholder="Description de l'article">{{ $product->description }}</textarea>
                </div>
                <div class="container">
                    <div class="row">
                        <button class="btn" type="submit" name="add" hidden>Ajouter</button>

                        <button class="btn" type="submit" name="update" hidden>Modifier</button>

                        <button class="btn" type="submit" name="delete">Supprimer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
