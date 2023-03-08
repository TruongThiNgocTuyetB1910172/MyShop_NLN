{{-- 


<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="./index.html"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="img/icons/search.png" alt="" class="search-trigger">
                <img src="img/icons/man.png" alt="">
                <a href="#">
                    <img src="img/icons/bag.png" alt="">
                    <span>2</span>
                </a>
            </div>
            <div class="user-access">
                <a href="#">Register</a>
                <a href="#" class="in">Sign in</a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a class="active" href="./index.html">Home</a></li>
                    <li><a href="./categories.html">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="product-page.html">Product Page</a></li>
                            <li><a href="shopping-cart.html">Shopping Card</a></li>
                            <li><a href="check-out.html">Check out</a></li>
                        </ul>
                    </li>
                    <li><a href="./product-page.html">About</a></li>
                    <li><a href="./check-out.html">Blog</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header> --}}
<div class="container">
    <div class="row">
        <div class="align-items-center py-3 px-xl-5 col-6">
            <form action="" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products" name="keyword">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @if (auth()->check())
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Login</a>
                <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Register</a>
            @endif



        </div> --}}

    </div>

    {{-- <div class="col-lg-3 col-6 text-right">

                <a href="{{ route('client.carts.index') }}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge" id="productCountCart">{{ $countProductInCart }}</span>
                </a>
            </div> --}}
</div>
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">

            <div class="logo">
                <a href="./index.html"><img src="{{ asset('client/img/logo.png') }}" alt=""></a>
            </div>
            <div class="header-right">

                <a href="">
                    <img src="{{ asset('client/img/icons/cart.png') }}" alt="">
                    <span class="badge" id="productCountCart"></span>

                    {{-- <span>0</span> --}}
                </a>
               
            </div>

            {{-- <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="" class="active">Home</a></li>
                    <li><a href="">Category</a>
                        <ul class="sub-menu">
                            @foreach ($categories as $item)
                                @if ($item->childrens->count() > 0)
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-toggle="dropdown">{{ $item->name }}
                                            <i class="fa fa-angle-down float-right mt-1"></i></a>
                                        <div
                                            class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">

                                            @foreach ($item->childrens as $childCategory)
                                                <a href="{{ route('client.products.index', ['category_id' => $childCategory->id]) }}"
                                                    class="dropdown-item">{{ $childCategory->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('client.products.index', ['category_id' => $item->id]) }}"
                                        class="dropdown-item">{{ $item->name }}</a>
                                @endif
                            @endforeach()

                        </ul>

                    </li>
                    <li><a href="{{ route('client.orders.index') }}" class="nav-link">Order</a></li>
                    {{-- <li><a href="./check-out.html">Blog</a></li>
                    <li><a href="./contact.html">Contact</a></li> --}}
                </ul>
            </nav> --}}
        </div>
    </div>
</header>