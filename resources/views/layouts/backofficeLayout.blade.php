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
        <title>RestHome - @yield('page')</title>
    </head>

    <body>
        <div class="background-color mx-5">
            <div class="container p-3">
                <div class="row">
                    <div class="col-6 pt-3">
                        <h1>RestHome.shop - Backoffice</h1>
                    </div>
                    <div class="col-6 pt-3">
                        <form action="{{ route('backoffice') }}" method="get">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputName" class="col-form-label">Chercher article</label>
                                </div>
                                <div class="col-auto">
                                    <input name="filter" type="text" class="form-control" placeholder="Nom de l'article">
                                </div>
                                <div class="col-auto">
                                    <span class="form-text">
                                        Taper le début du nom de l'article.
                                    </span>
                                    <button name="search" class="col-auto btn btn-light" type="submit">OK</button>
                                </div>
                                <button name="display" class="btn btn-light col-3" type="submit">Aficher tout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4 px-5">
                        @yield('form')
                    </div>
                    <div class="col-auto">
                        <div class="container p-0">
                            <div class="row position-relative">
                                <h2 class="col-6">Liste des produits</h2>
                            </div>
                            @yield('list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
