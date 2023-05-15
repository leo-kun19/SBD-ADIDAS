<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <img class="logoAdidas"
                    src="{{ asset('frontend') }}/assets/images/adidas logo png 3 line - Bing images_files/adidas.png"
                    alt="logo adidas">
                <a href="{{ route('home') }}">ADIDAS</a>
            </div>
            <div class="login-bars ">
                {{-- proses whistlist, my cart, checkout page dari ar-araf --}}

                {{-- @auth
                  <li><a href="{{ route('checkout-page') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
              @endauth
                <li><a href="{{ route('listWishlist') }}"><i class="icon fa fa-heart"></i>Wishlist</a></li>
              <li><a href="{{ route('myCartView') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li> --}}

                {{-- @auth
                    <a class="btn btn-default log-bar" href="{{ route('user.logout') }}"><i class="icon fa fa-user"></i>User
                        Logout</a>
                @else --}}
                @auth
                    <a class="btn btn-primary " href="{{ route('login') }}"><i class="icon fa fa-address-card"></i></a>
                    <a class="btn btn-default " href="{{ route('checkout') }}"><i
                            class="icon fa fa-shopping-cart"></i></a>
                    <a class="btn btn-danger " href="{{ route('listWishlist') }}"><i
                            class="icon fa fa-heart"></i></a>
                    {{-- <div class="btn btn-dark">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')"onclick="event.preventDefault();this.closest('form').submit();"><i
                                    class="icon fa fa-sign-out ">Logout</i></a>
                        </form>
                    </div> --}}
                    <a class="btn btn-dark href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="icon fa fa-sign-out"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-default log-bar" href="{{ route('login') }}"><i
                            class="icon fa fa-lock"></i>Login/Register</a>
                @endauth
                {{-- <div class="cart box_1">
                        <a href="checkout">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span>(<span id="simpleCart_quantity"
                                        class="simpleCart_quantity"></span>)
                                </div>
                            </h3>
                        </a>
                        <div class="clearfix"> </div>
                    </div> --}}



            </div>
            <div class="clearfix"></div>
        </div>
        <!---menu-----bar--->
        <div class="header-botom">
            <div class="content white">
                <nav class="navbar navbar-default nav-menu" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="clearfix"></div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-font">
                            <li class="">
                                <a href="/produk">Shop<b class="caret"></b></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4 menu-img-pad">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="products">Joggers</a></li>
                                                <li><a href="products">Foot Ball</a></li>
                                                <li><a href="products">Cricket</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products">Tennis</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/adidasMan1.jpg"
                                                    alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/adidasMan2.jpg"
                                                    alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4 menu-img-pad">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="products">Tops</a></li>
                                                <li><a href="products">Bottoms</a></li>
                                                <li><a href="products">Yoga Pants</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products">Sports</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products">Gym</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/adidasWomen1.jpg"
                                                    alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/adidasWomen2.jpg"
                                                    alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4 menu-img-pad">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="products">Tees</a></li>
                                                <li><a href="products">Shorts</a></li>
                                                <li><a href="products">Gear</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products">Watches</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/adidasKids1.jpg"
                                                    alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/adidasKids2.jpg"
                                                    alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="contact">Catch</a></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--/.navbar-collapse-->
                    <div class="clearfix"></div>
                </nav>
                <!--/.navbar-->
                <div class="clearfix"></div>
            </div>
            <!--/.content--->
        </div>
        <!--header-bottom-->
    </div>
</div>
