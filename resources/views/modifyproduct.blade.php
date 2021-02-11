<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Modifications des produits</title>
</head>
<body>
    <h1>Modification de produits</h1>
    <form action="/backoffice/modifyproduct" method="post">
=======
    <title>Modifications de produits</title>
</head>
<body>
    <h1>Modification des produits</h1>
    <form action="/backofice/modifyproduct" method="post">
>>>>>>> 303d290e95cbf9361e036b9114578cae004e0dca
        {{ csrf_field() }}
        <input name="id" type="number" placeholder="ID du produit">
        <input name="name" type="text" placeholder="Nom du Produit">
        <input name="price" type="number" placeholder="Prix du Produit">
        <input name="category_id" type="number" placeholder="Categorie du produit">

<<<<<<< HEAD
        <button name="add" class="btn" type="submit">Modify product</button>
=======
        <button name="modify" class="btn" type="submit">Modify product</button>
>>>>>>> 303d290e95cbf9361e036b9114578cae004e0dca
    </form>
</body>
</html>
