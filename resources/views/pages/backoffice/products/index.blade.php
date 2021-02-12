@extends('layouts.backofficeLayout')

@section('page', 'Backoffice')

@section('form')
    <div class="panel panel-default">
        <div class="panel-body">
{{--            <form class="" action="@if(!empty($product)) {{ route('updateProduct', $product) }} @else {{ route('addProduct') }} @endif" method="post">--}}
            <form class="" action="{{ (!empty($product)) ?route('updateProduct', $product) : route('addProduct')}}" method="post">
                @csrf
                @isset($product) @method('PUT') @endisset
                <div class="form-group">
                    <h2>Ajout d'un nouvel article</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <label for="name">Nom de l'article</label>
                    <input type="text" @isset($product) value="{{ $product->name }}" @endisset class="form-control" name="name" placeholder="Saisir un nom">
                </div>
                <div class="form-group">
                    <label for="price">Prix de l'article</label>
                    <input type="text" @isset($product) value="{{ $product->price }}" @endisset class="form-control" name="price" placeholder="Saisir un prix">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité de l'article</label>
                    <input type="text" @isset($product) value="{{ $product->quantity }}" @endisset class="form-control" name="quantity" placeholder="Saisir une quantité">
                </div>
                <div class="form-group">
                    <label for="category">Categorie de l'article</label>
                    <input type="text" @isset($product) value="{{ $product->category_id }}" @endisset class="form-control" name="category_id" placeholder="Saisir une categorie">
                </div>
                <div class="form-group">
                    <label for="category">Description de l'article</label>
                    <textarea name="description"  class="form-control" rows="3" placeholder="Description de l'article">@isset($product){{ $product->description }}@endisset</textarea>
                </div>
                <div>
                    <button class="btn btn-light col-auto" type="submit" @if(!empty($product)) name="update">  @else hidden @endif @if(!empty($product)) Modifier @endif</button>
                    <button class="btn btn-light col-auto" type="submit" name="add">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('list')
    <div class="row">
        <div class="col-xs-12 mt-3">
            <ol class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <div class="row px-2" >
                            {{$product->id}}
                            <div class="col-9">
                                <span class="col-auto">{{ $product->name }} |</span>
                                <span class="col-auto">prix : {{ $product->price }} |</span>
                                <span class="col-auto">quantité : {{$product->quantity}} |</span>
                                <span class="col-auto">catégorie : {{$product->category->name}} ({{$product->category->id}})</span>
                            </div>
                            <form class="col-auto" action="{{ route('editProduct', $product) }}" method="get">
                                @csrf
                                <button name="edit" class="btn col-auto h-auto m-0" type="submit">Modifier</button>
                            </form>
                            <form class="col-auto" action="{{ route('deleteProduct', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button name="delete" class="border-0 bg-white col-auto" type="submit"><img src="{{ asset('image/trash.svg') }}"></button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection
