@extends('layouts.backoffice-layout')

@section('title', 'Backoffice- Modification')

@section('formulaire')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
        <div class="mb-3 row">
            <label class="form-label col-3">Catégorie</label>
            <div class="col-8">
                <select name="categorie_id" value="{{ $product->categorie['name'] }}" class="form-select" id="exampleFormControlTextarea1" rows="3">
                    <option value="" disabled>--Selectionner une catégorie--</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}"
                        @if ($product->categorie_id == $categorie->id)
                            selected
                        @endif>{{ $categorie->name }}</option>
                    @endforeach
                </select>
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

