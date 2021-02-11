@extends('layouts.backoffice-layout')


@section('formulaireaddproduct')

    <h1>Formulaire add</h1>


        <div class="col-8">
        <form action="/" method="get">
            <button name="add" class="btn" type="submit">Add product</button>
            <input name="filter" type="text" placeholder="Saisir une partie du nom de l'article">
        </form>


            </form>
        </div>


</div>
@endsection
