@extends('layouts.backofficeLayout')

@section('page', 'Backoffice')

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
                    <input type="text" class="form-control" name="name" placeholder="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="price">Prix de l'article</label>
                    <input type="text" class="form-control" name="price" placeholder="Saisir un prix">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité de l'article</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Saisir une quantité">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
