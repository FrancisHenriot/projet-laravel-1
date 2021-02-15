<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suppression des produits</title>
</head>
<body>
    <h1>Suppression du produit</h1>
    <form action="/backoffice/deleteproduct/{{ $product->id }}" method="post">
        {{ csrf_field() }}
        <input name="id" type="number" value="{{ $product->id }}">
        <input name="name" type="text" value="{{ $product->name }}">
        <input name="price" type="number" value="{{ $product->price }}">
        <input name="category_id" type="number" value="{{ $product->category_id }}">

        <button name="add" class="btn" type="submit">Delete Product</button>
    </form>
</body>
</html>
