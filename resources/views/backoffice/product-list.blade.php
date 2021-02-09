@extends('layouts.backoffice-layout')

@section('title', 'Backoffice - Liste produits')

@section('formulaire')
    <form action="{{ route('addProduct') }}" method="post">
        {{ csrf_field() }}
        <h3>Saisie d'un nouveau produit</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                <select name="categorie_id" class="form-select {{ $errors->has('categorie_id') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="3">
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

@section('list')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>
                        <a href="{{ route('updateProduct', $product->id) }}">
                            {{ $product->name }}</td>
                        </a>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>

            @endforeach

        </tbody>
    </table>
@endsection
