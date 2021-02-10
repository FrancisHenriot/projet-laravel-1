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
                    <input type="text" class="form-control" name="name" placeholder="Saisir un nom">
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

@section('list')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ol class="list-group">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                {{$product->id}}
                                <a href="{{ route('product.edit', $product->id) }}">{{$product->name}}</a>
                                prix : {{$product->price}}
                                quantité : {{$product->quantity}}
                            </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
