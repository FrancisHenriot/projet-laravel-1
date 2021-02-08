@extends('layouts.backoffice-layout')

@section('title', 'Backoffice')

@section('formulaire')
    <form action="{{ route('addProduct') }}" method="post">
        {{ csrf_field() }}
        <h3>Saisie d'un nouveau produit</h3>
        <div class="mb-3 row">
            <label class="form-label col-3">Nom de l'article</label>
            <div class="col-8">
                <input required name="name" value="@yield('productName')" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nom du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Prix</label>
            <div class="col-8">
                <input required name="price" value="@yield('productPrice')" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Prix du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Description</label>
            <div class="col-8">
                <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description du produit">@yield('productDescription')</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Catégorie</label>
            <div class="col-8">
                <select name="categorie_id" class="form-control" id="exampleFormControlTextarea1" rows="3">
                    <option value="" selected disabled>--Selectionner une catégorie--</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <button class="btn" type="submit" name="add" @yield('addBtnStatus')>Ajouter</button>

            </div>
        </div>
    </form>
@endsection
