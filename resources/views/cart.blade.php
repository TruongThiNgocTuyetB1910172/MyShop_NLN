<a class="nav-icon position-relative text-decoration-none" href="/carts">
    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{!is_null(Illuminate\Support\Facades\Session::get('carts')) ? count(Illuminate\Support\Facades\Session::get('carts')) : 0 }}</span>
</a>