
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="{{ route('home') }}">
            <img class="img-fluid" src={{ asset('images/logo_clair.svg') }} alt="Logo RestHome">
        </a>
        <a href="{{ route('home') }}">
            <img class="img-fluid" src={{ asset('images/logo_texte_resthome_clair.svg') }} alt="Logo RestHome">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-5 me-auto mb-2 mb-lg-0 align-items-center justify-content-end">
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LES RECETTES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="{{ route('product-list') }}" method="GET">
                        <li><button class="dropdown-item" name="categorie" value="2" type="submit">Healthy</button></li>
                        <li><button class="dropdown-item" name="categorie" value="1" type="submit">Gourmet</button></li>
                        <li><button class="dropdown-item" name="categorie" value="3" type="submit">Végan</button></li>
                        <li><button class="dropdown-item" name="categorie" value="4" type="submit">Rapide</button></li>
                    </form>
                </ul>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LES PRODUITS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Fruits</a></li>
                    <li><a class="dropdown-item" href="#">Légumes</a></li>
                    <li><a class="dropdown-item" href="#">Féculents</a></li>
                    <li><a class="dropdown-item" href="#">Céréales</a></li>
                    <li><a class="dropdown-item" href="#">Viandes</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONSEILS DU CHEF
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Cuissons</a></li>
                    <li><a class="dropdown-item" href="#">Les graisses</a></li>
                    <li><a class="dropdown-item" href="#">Duos chocs</a></li>
                    <li><a class="dropdown-item" href="#">Produits de saison</a></li>
                </ul>
            </li>
            <li class="nav-item mx-3">
                <a class="btn" href="{{ route('product-list') }}">Catalogue</a>
            </li>
            <li class="nav-item mx-3">
                <a href="{{ route('cart') }}">
                    <!--<img class="img-button" src={{ asset('images/shopping-cart-1.svg') }} width="40" alt="">-->
                    <svg class="img-button" width="40" height="40" viewBox="0 0 81 81" >
                        <path d="M23.4146 60.0092C19.8758 59.8284 19.9424 54.8509 23.4145 54.6781C33.2497 54.7123 59.1907 54.6872 69.3387 54.6944C72.1142 54.6944 74.4889 52.8055 75.1131 50.1013L80.8754 25.1488C81.2055 23.7201 80.8724 22.2414 79.962 21.0921C79.0515 19.9427 77.6885 19.2743 76.2223 19.2743C72.1399 19.2743 37.4868 19.1174 19.7376 19.0467L16.9241 8.60715C16.2487 6.11238 13.972 4.37012 11.3875 4.37012H2.37431C1.06306 4.37012 0 5.43317 0 6.74443C0 8.05568 1.06306 9.11873 2.37431 9.11873H11.3875C11.8324 9.11873 12.2242 9.41869 12.3399 9.84559L23.1454 49.9359C21.2455 50.005 19.4758 50.7777 18.1339 52.1393C16.7238 53.5702 15.9666 55.4643 16.0016 57.4728C16.0715 61.4896 19.397 64.7576 23.4146 64.7576H26.8767C26.3621 65.8378 26.0732 67.0454 26.0732 68.3193C26.0732 72.9017 29.8012 76.6297 34.3836 76.6297C38.966 76.6297 42.694 72.9017 42.694 68.3193C42.694 67.0452 42.405 65.8378 41.8904 64.7576H56.8827C56.3686 65.8375 56.0797 67.0444 56.0797 68.318C56.0797 72.9004 59.8079 76.6284 64.3901 76.6284C68.9725 76.6284 72.7007 72.9002 72.7007 68.318C72.7007 66.9949 72.3882 65.7438 71.8358 64.6323C72.7754 64.3159 73.4529 63.4296 73.4529 62.3835C73.4529 61.0722 72.3898 60.0092 71.0786 60.0092H23.4146ZM37.9452 68.3194C37.9452 70.2834 36.3475 71.8812 34.3835 71.8812C32.4194 71.8812 30.8217 70.2834 30.8217 68.3194C30.8217 66.3565 32.4179 64.7594 34.3805 64.7578H34.3865C36.3491 64.7594 37.9452 66.3565 37.9452 68.3194ZM64.3903 71.8799C62.4264 71.8799 60.8285 70.282 60.8285 68.3181C60.8285 66.3736 62.3952 64.789 64.3325 64.7578H64.4482C66.3857 64.789 67.9524 66.3736 67.9524 68.3181C67.9522 70.282 66.3543 71.8799 64.3903 71.8799ZM76.2397 24.0403C76.2538 24.058 76.2517 24.0664 76.2487 24.08L73.8207 34.5943H65.599L66.999 23.9854L76.2033 24.0224C76.2174 24.0227 76.2257 24.0227 76.2397 24.0403ZM51.7613 49.9456V39.3429H60.1825L58.7833 49.9456H51.7613ZM39.9876 49.9456L38.577 39.3429H47.0127V49.9456H39.9876ZM29.0574 49.9456H29.05C28.4713 49.9454 27.9614 49.5551 27.8109 48.999L25.2083 39.3429H33.7864L35.1971 49.9456H29.0574ZM37.9451 34.5944L36.5172 23.8627L47.0126 23.905V34.5944H37.9451ZM51.7613 34.5944V23.9241L62.2118 23.9662L60.8092 34.5944H51.7613ZM31.7241 23.8432L33.1545 34.5943H23.9284L21.0191 23.8L31.7241 23.8432ZM69.3387 49.9456H63.5729L64.9722 39.3429H72.724L70.4862 49.0328C70.3621 49.5703 69.8903 49.9456 69.3387 49.9456Z" />
                    </svg>
                </a>
            </li>
            <li class="nav-item mx-3">
               {{--  <div class="container">
                <div class="row"> --}}
                    @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn" >Se deconnecter</button>
                    </form>
                    <p class="col-4" style="color: #ffffff">{{ Auth::user()->name }}</p>
                    @else

                    <a class="btn" href="{{ route('register') }}">Se connecter</a>

                    @endif
                {{-- </div>
                </div> --}}
            </li>
        </ul>

      </div>
    </div>
  </nav>
