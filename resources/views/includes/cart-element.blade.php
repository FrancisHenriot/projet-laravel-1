<div class="card mb-3" style="">
    <div class="row g-0 justify-content-around">
        <div class="col-md-4">
            <img src="..." alt="...">
        </div>
        <div class="col-md-4">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column">
            <div class="d-inline-flex justify-content-center align-items-center">
                <form action="{{ route('cartUpdate', $order->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                    <button class="btn p-2 m-2" style="width: auto" name="remove">-</button>
                </form>
                    <p class="mb-0">Quantité : {{ $product->pivot->quantity }}</p>
                <form action="{{ route('cartUpdate', $order->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                    <button class="btn p-2 m-2" style="width: auto" name="add">+</button>
                </form>
            </div>
            <p class="text-center" style="font-family: fairplay-display; font-weight: bold ; font-size: 30px; color: #A9AD53">{{ $product->price * $product->pivot->quantity }} €</p>
            <form class="m-auto" action="{{ route('cartUpdate', $order->id) }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                <button class="btn align-self-end" style="width: auto" type="submit" name="suppr">Supprimer</button>
            </form>
        </div>
    </div>
</div>
