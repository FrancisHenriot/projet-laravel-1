@extends('layouts.backoffice-layout')


@section('formulaire add')

    <h1>Formulaire add</h1>


        <div class="col-8">
        <form action="" method="get">
            <button name="add" class="btn" type="submit">Add product</button>
            <input name="filter" type="text" placeholder="Saisir une partie du nom de l'article">
        </form>


        <div class="col-8">
        <form action="" method="get">
            <button name="modify" class="btn" type="submit">Modify product</button>
            <input name="filter" type="text" placeholder="Saisir une partie du nom de l'article">
        </form>

        <div class="col-8">
            <form action="" method="get">
                <button name="delete" class="btn" type="submit">Delete product</button>
                <input name="filter" type="text" placeholder="Saisir une partie du nom de l'article">
            </form>
        </div>


</div>
@endsection
