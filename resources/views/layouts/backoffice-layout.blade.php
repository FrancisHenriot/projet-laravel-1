<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" >

    <title>RestHome - @yield('title')</title>
</head>

<body>
    <div class="background-color">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>RestHome.shop</h1>
                </div>
                <div class="col-6">
                    <h1> - BackOffice</h1>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form action="@yield('route')" method="post">
                        {{ csrf_field() }}
                        @yield('message')
                        <div class="mb-3 row">
                            <label class="form-label col-3">Nom de l'article</label>
                            <div class="col-8">
                                <input name="name" value="@yield('productName')" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nom du produit">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-3">Prix</label>
                            <div class="col-8">
                                <input name="price" value="@yield('productPrice')" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Prix du produit">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-3">Description</label>
                            <div class="col-8">
                                <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description du produit">@yield('productDescription')</textarea>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <button class="btn" type="submit" name="add" @yield('addBtnStatus')>Ajouter</button>
                                <button class="btn" type="submit" name="update" @yield('updateBtnStatus')>Modifier</button>
                                <button class="btn" type="submit" name="delete" @yield('deleteBtnStatus')>Supprimer</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-6">
                    <div class='container'>

                        <div class="col-8">
                            <form action="{{ route('backoffice') }}" method="get">
                                <button name="search" class="btn" type="submit">Search product</button>
                                <input name="filter" type="text" placeholder="Saisir une partie du nom de l'article">
                            </form>
                        </div>
                    </div>
                    <h2>Liste des produits</h2>

                    @yield('list')
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
