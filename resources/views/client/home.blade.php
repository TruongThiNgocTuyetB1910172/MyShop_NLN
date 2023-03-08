@extends('client.main')
@section('content')
<section class="hero-slider">
    <div class="hero-items owl-carousel">
        <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>2019</h1>
                        <h2>Lookbook.</h2>
                        <a href="#" class="primary-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>2019</h1>
                        <h2>Lookbook.</h2>
                        <a href="#" class="primary-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>2019</h1>
                        <h2>Lookbook.</h2>
                        <a href="#" class="primary-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="latest-products spad">
    <div class="container">
        <div class="product-filter">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Latest Products</h2>
                    </div>
                    <ul class="product-controls">
                        <li data-filter="*">All</li>
                        <li data-filter=".dresses">Dresses</li>
                        <li data-filter=".bags">Bags</li>
                        <li data-filter=".shoes">Shoes</li>
                        <li data-filter=".accesories">Accesories</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="product-list">
            <div class="col-lg-3 col-sm-6 mix all dresses bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-1.jpg" alt=""></a>
                        <div class="p-status">new</div>
                    </figure>
                    <div class="product-text">
                        <h6>Green Dress with details</h6>
                        <p>$22.90</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mix all dresses bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="img/products/img-2.jpg" alt=""></a>
                        <div class="p-status sale">sale</div>
                    </figure>
                    <div class="product-text">
                        <h6>Yellow Maxi Dress</h6>
                        <p>$25.90</p>
                    </div>
                </div>
            
        </div>
    </div>
</section>

@endsection