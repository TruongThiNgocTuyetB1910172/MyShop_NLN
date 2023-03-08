@extends('main')

@section('content')
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h3 class="section-title px-5"><span class="px-2">Kết quả tìm kiếm</span></h3>
        </div>
        <div class="col-md-3">
            @if ($products->count() > 0)
                @foreach ($products as $key =>$product )
                    
                
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
                            <center> <a href="product-detail/{{ $product->id }}" class="h3 text-decoration-none">{{ $product->name }}</a></center>
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
                            <p class="text-center mb-0">{{ $product->price }} VNĐ</p>
                        </div>
                    </div>
                @endforeach
            @else
            <div> <h3 style="color: red
            ">Không tìm thấy sản phẩm nào !! Vui lòng tìm lại</h3></div>
            @endif
        </div>
    </div>
@endsection
