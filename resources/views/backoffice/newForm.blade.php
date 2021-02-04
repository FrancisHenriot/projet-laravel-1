@extends('layouts.backoffice-layout')

@section('title', 'Backoffice- Ajout')

@section('content')
<form action="" method="post">
    {{ csrf_field() }}

    <div class="mb-3 row">
        <label class="form-label col-1">Nom de l'article</label>
        <div class="col-8">
            <input name="name" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nom du produit">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="form-label col-1">Prix</label>
        <div class="col-8">
            <input name="price" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Prix du produit">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="form-label col-1">Description</label>
        <div class="col-8">
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description du produit"></textarea>
        </div>
    </div>

    <button class="btn" type="submit" name="add">Ajouter</button>
</form>
@endsection
