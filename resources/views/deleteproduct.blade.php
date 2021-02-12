<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suppression de produits</title>
</head>
<body>
    <h1>Suppression de produits</h1>
    <form action="/backoffice/deleteproduct" method="post">
        {{ csrf_field() }}
        <input name="id" type="number" placeholder="{{ $product->id }}">
        <input name="name" type="text" placeholder="{{ $product->name }}">
        <input name="price" type="number" placeholder="{{ $product->price }}">
        <input name="category_id" type="number" placeholder="{{ $product->categoty_id }}">

        <button name="add" class="btn" type="submit">Delete product</button>
    </form>
</body>
</html>
