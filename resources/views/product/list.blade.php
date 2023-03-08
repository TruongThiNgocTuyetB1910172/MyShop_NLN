@extends('main')
@section('content')


<body>
   

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            {{-- <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    @foreach ($menus as $key => $menu)
                         <ul>
                            <li>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link" data-toggle="dropdown">{{ $menu->name }}
                                    </a>
                                </div>
                            </li>
                        </ul>      
                                  
                                                    
                     @endforeach()
                 
                </ul>
            </div> --}}
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                   
                    {!! App\Helpers\helper::menus($menus) !!}
                    
                </ul>
            </div>

            <div class="col-lg-9">
               <center><h1>Product List</h1></center> 
                <div class="row">
                   @foreach ($products as $key => $product )
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="{{ $product->thumb }}">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="product-detail/{{ $product->id }}"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none">{{ $product->name }}</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0">{{ number_format($product->price, 0, '', '.')}} VNĐ</p>
                        </div>
                    </div>
                 
                </div>
                @endforeach
                
                       
                
            </div>
               
               
            </div>

        </div>
    </div>
   



  

</html>
@endsection