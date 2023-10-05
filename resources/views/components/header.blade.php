<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> phutamytb@gmail.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src=" {{ asset('storage/img/language.png') }}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Tiếng Việt</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth w-25">
                            <div class="d-flex justify-content-between">
                                @auth()
                                <a href="#"><i class="fa fa-user"></i> {{auth()->user()->name}} </a>
                                <form id="form-logout" action="{{route("logout")}}" method="post">
                                    @csrf
                                </form>
                                <a href="javascript:void(0);" onclick="$('#form-logout').submit();">
                                    <i class="fa fa-arrow-circle-o-right"></i>Logout</a>
                            @endauth
                            @guest()
                                    <a href="{{ route("login") }}"><i class="fa fa-user"></i> Login</a>
                                    <a href="{{ route("register") }}"><i class="fa fa-user"></i> Register</a>
                            @endguest
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src=" {{ asset('storage/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li
                            class = "{{request()->is('/') ? 'active' : '' }}"
                        ><a href="/">Home</a>
                        </li>
                        <li
                            class = "{{request()->is('shop-grid/{category:slug}') || request()->is('shop-details/{product:slug}') ||
                       request()->is('shopping-cart') || request()->is('checkout')
                       ? 'active' : '' }}"
                        >
                            <a href="/shop-grid">Shop</a>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="/shop-details">Shop Details</a></li>
                                <li><a href="/shopping-cart">Shoping Cart</a></li>
                                <li><a href="/checkout">Check Out</a></li>
                                <li><a href="/blog-details">Blog Details</a></li>
                            </ul>
                        </li>
                        <li
                            class = "{{request()->is('blog') || request()->is('blog-details') ? 'active' : '' }}"
                        >
                            <a href="/blog">Blog</a>
                        </li>
{{--                        <li--}}
{{--                            class = "{{request()->is('contact') ? 'active' : '' }}"--}}
{{--                        >--}}
{{--                            <a href="/contact">Contact</a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="admin/admin-dashboard">Admin Dashboard</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{url("/shopping-cart")}}"><i class="fa fa-shopping-bag"></i>
                                <span>
                                    {{session()->has("cart")?count(session("cart")):0}}
                                </span>
                            </a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
