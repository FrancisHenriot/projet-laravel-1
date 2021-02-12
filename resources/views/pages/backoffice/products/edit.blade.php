@extends('layouts.backofficeLayout')

@section('page', 'Backoffice - Modification')

@section('form')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Mes articles</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{ route('pages.backoffice.product.update'), $product->id }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom de l'article</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Nom de l'article">
                </div>
                <div class="form-group">
                    <label for="price">Prix de l'article</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}" placeholder="Prix de l'article">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité de l'article</label>
                    <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" placeholder="Quantité de l'article">
                </div>
                <div class="form-group">
                    <label for="category">Categorie de l'article</label>
                    <input type="number" class="form-control" name="category" value="{{ $product->category }}" placeholder="Catégorie de l'article">
                </div>
                <div class="form-group">
                    <label for="category">Description de l'article</label>
                    <textarea name="description"  class="form-control" rows="3" placeholder="Description de l'article">{{ $product->description }}</textarea>
                </div>
                <div class="container">
                    <div class="row">
                        <button class="btn" type="submit" name="add" hidden>Ajouter</button>

                        <button class="btn" type="submit" name="update" >Modifier</button>

                        <button class="btn" type="submit" name="delete" >Supprimer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
