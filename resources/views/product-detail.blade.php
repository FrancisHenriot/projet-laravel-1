@extends('layouts.layout')

@section('title', 'Product')
@section('content')
    <div style="margin: 5%;">
        <h3 class = "text-uppercase">Fiche du produit {{ $id }} : filet d’omble chevalier au bleu du vercors, pomme de terre puree a la ciboulette et vinaigrette balsamique</h3>
        <div class="row" style="padding-top: 30px;">
            <div class="col-6 col-md-4">
                <p class="text-sm-left">4 portions d’omble chevalier</p>
                <p class="text-sm-left">1 kg de pommes de terre</p>
                <p class="text-sm-left">120 g de bleu du vercors</p>
                <p class="text-sm-left">1 bouquet de ciboulette</p>
                <p class="text-sm-left">75 g de beurre</p>
                <p class="text-sm-left">Un peu de lait</p>
                <p class="text-sm-left">Huile d’olive</p>
                <p class="text-sm-left">Vinaigre balsamique</p>
            </div>
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4"></div>
        </div>

        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>

    </div>
@endsection

