@extends('layouts.mainlayout')

@section('page', 'Catalogue')

@section('content')
@parent
    @foreach ($products as $product)
        <a href="{{ route('details', $product->id) }}">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ $product-> image }}" alt="{{ $product-> name }}" width="100%" />
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to basket</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endsection
