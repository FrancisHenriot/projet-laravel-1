<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout de produits</title>
</head>
<body>
    <h1>Ajout de produits</h1>
    <form action="/backoffice/addproduct" method="post">
        {{ csrf_field() }}
<<<<<<< HEAD
=======

>>>>>>> 303d290e95cbf9361e036b9114578cae004e0dca
        <input name="id" type="number" placeholder="ID du produit">
        <input name="name" type="text" placeholder="Nom du Produit">
        <input name="price" type="number" placeholder="Prix du Produit">
        <input name="category_id" type="number" placeholder="Categorie du produit">

        <button name="add" class="btn" type="submit">Add product</button>
    </form>
</body>
</html>
