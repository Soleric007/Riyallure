<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">

                <ul class="header-user-links flex items-center">
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <div class="cs_header_credential_btns">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="bg-none" type="submit">
                                            Log Out
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li>
                                <div class="">
                                    <span>
                                        <a href="{{ route('login') }}">Log in</a> / <a href="{{ route('register') }}">Sign
                                            Up</a>
                                    </span>
                                </div>
                            </li>
                        @endauth
                    @endif
                    {{-- <li>
                        <a href="{{ route('login') }}">Login</a>/
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/home/assets/images/logo.png" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">

                                <div class="inner">
                                    <input type="text" class="input" name="s" value=""
                                        placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart stelina-mini-cart block-header stelina-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-stelina="stelina-dropdown">
                                Cart
                                <span class="count">
                                    0
                                </span>
                            </a>
                            {{-- Cart Modal --}}
                            <div class="shopcart-description stelina-submenu">
                                <div class="content-wrap">
                                    <h3 class="title">Shopping Cart</h3>
                                    <ul class="minicart-items">
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="/home/assets/images/item-minicart-1.jpg" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#">Bibliotheque</a>
                                                </h5>
                                                <div class="variations">
                                                    <span class="attribute_color">
                                                        <a href="#">Black</a>
                                                    </span>
                                                    ,
                                                    <span class="attribute_size">
                                                        <a href="#">300ml</a>
                                                    </span>
                                                </div>
                                                <span class="product-price">
                                                    <span class="price">
                                                        <span>$45</span>
                                                    </span>
                                                </span>
                                                <span class="product-quantity">
                                                    (x1)
                                                </span>
                                                <div class="product-remove">
                                                    <a href="#"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="/home/assets/images/item-minicart-2.jpg" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#">Soap Dining Solutions</a>
                                                </h5>
                                                <div class="variations">
                                                    <span class="attribute_color">
                                                        <a href="#">Black</a>
                                                    </span>
                                                    ,
                                                    <span class="attribute_size">
                                                        <a href="#">300ml</a>
                                                    </span>
                                                </div>
                                                <span class="product-price">
                                                    <span class="price">
                                                        <span>$45</span>
                                                    </span>
                                                </span>
                                                <span class="product-quantity">
                                                    (x1)
                                                </span>
                                                <div class="product-remove">
                                                    <a href="#"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="/home/assets/images/item-minicart-3.jpg" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#">Dining Solutions Soap</a>
                                                </h5>
                                                <div class="variations">
                                                    <span class="attribute_color">
                                                        <a href="#">Black</a>
                                                    </span>
                                                    ,
                                                    <span class="attribute_size">
                                                        <a href="#">300ml</a>
                                                    </span>
                                                </div>
                                                <span class="product-price">
                                                    <span class="price">
                                                        <span>$45</span>
                                                    </span>
                                                </span>
                                                <span class="product-quantity">
                                                    (x1)
                                                </span>
                                                <div class="product-remove">
                                                    <a href="#"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="subtotal">
                                        <span class="total-title">Subtotal: </span>
                                        <span class="total-price">
                                            <span class="Price-amount">
                                                $135
                                            </span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <a class="button button-viewcart" href="shoppingcart.html">
                                            <span>View Bag</span>
                                        </a>
                                        <a href="checkout.html" class="button button-checkout">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container rows-space-20">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">

                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                            <li class="menu-item ">
                                <a href="{{ route('index') }}" class="stelina-menu-item-title"
                                    title="Home">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('shop.show') }}" class="stelina-menu-item-title"
                                    title="Shop">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('aboutUs') }}" class="stelina-menu-item-title"
                                    title="About Us">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('contact') }}" class="stelina-menu-item-title"
                                    title="Contact Us">Contact Us</a>
                            </li>

                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="menu-item">
                                        <div class="cs_header_credential_btns">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="bg-none font-bold ml-5 uppercase" type="submit">
                                                    Log Out
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="menu-item">
                                        <a href="{{ route('login') }}" class="stelina-menu-item-title"
                                            title="Login">Login</a>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
