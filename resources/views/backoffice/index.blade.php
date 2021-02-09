@extends('layouts.backoffice-layout')

@section('title', 'Backoffice')

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
    <form action="{{ route('addProduct') }}" method="post">
        {{ csrf_field() }}
        <h3>Saisie d'un nouveau produit</h3>
        <div class="mb-3 row">
            <label class="form-label col-3">Nom de l'article</label>
            <div class="col-8">
                <input name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="3" placeholder="Nom du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Prix</label>
            <div class="col-8">
                <input name="price" value="{{ old('price') }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="3" placeholder="Prix du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Description</label>
            <div class="col-8">
                <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description du produit">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3">Catégorie</label>
            <div class="col-8">
                <select name="categorie_id" class="form-select" id="exampleFormControlTextarea1" rows="3">
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
