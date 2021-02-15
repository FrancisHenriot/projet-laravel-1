<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site</title>
</head>
<body>
    <p> id {{ $product->id }}</p>
    <p> name {{ $product->name }}</p>
    <p> description {{ $product->description }}</p>
    <p> price {{ $product->price }}</p>
    <p> weight {{ $product->weight }}</p>
    <p> image {{ $product->image }}</p>
    <p> quantity {{ $product->quantity }}</p>
    <p> avaible {{ $product->avaible }}</p>
    <p> category_id {{ $product->category_id}}</p>
</body>
</html>
