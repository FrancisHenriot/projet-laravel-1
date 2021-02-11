@extends('layouts.backoffice-layout')


@section('formulairemodifyproduct')

<div class="col-8">
    <form action="/" method="get">
        <button name="modify" class="btn" type="submit">Modify product</button>
        <input name="name" type="text" placeholder="Nom du produit">
    </form>

</div>
@endsection
