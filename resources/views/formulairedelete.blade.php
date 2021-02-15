@extends('layouts.backoffice-layout')


@section('formulairedeleteproduct')

<div class="col-8">
    <form action="/" method="get">
        <button name="modify" class="btn" type="submit">Delete product</button>
        <input name="filter" type="text" placeholder="Nom du produit">
    </form>

</div>
@endsection
