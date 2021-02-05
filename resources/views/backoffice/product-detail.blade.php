@extends('layouts.backoffice-layout')

@section('title', 'Backoffice- Modification')

@section('formulaire')
    <form action="{{ route('modifyProduct', $product->id) }}" method="post">
        {{ csrf_field() }}
        @method('PUT')
        <h3>{{ $message }}</h3>
        <div class="mb-3 row">
            <label class="form-label col-3">Nom de l'article</label>
            <div class="col-8">
                <input name="name" value="{{ $product->name }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nom du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Prix</label>
            <div class="col-8">
                <input name="price" value="{{ $product->price }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Prix du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Description</label>
            <div class="col-8">
                <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description du produit">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <button class="btn" type="submit" name="update" >Modifier</button>
            </div>
        </div>
    </form>

    <form action="{{ route('deleteProduct', $product->id) }}" method="post">
        {{ csrf_field() }}
        @method('DELETE')
        <div class="container">
            <div class="row">
                <button class="btn" type="submit" name="delete" >Supprimer</button>
            </div>
        </div>
    </form>
@endsection

