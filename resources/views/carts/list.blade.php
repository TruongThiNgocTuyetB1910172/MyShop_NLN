@extends('main')

@section('content')



    {{-- <form class="bg0 p-t-130 p-b-85" method="post">
         @include('admin.alert')

        @if (count($products) != 0) 
        
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="">
                            <div class="">
                                @php $total = 0; @endphp
                                <table class="table-shopping-cart">
                                    <tbody>
                                    <tr class="table_head">
                                        <th class="column-1">Product</th>
                                        <th class="column-2"></th>
                                        <th class="column-3">Price</th>
                                        <th class="column-4">Quantity</th>
                                        <th class="column-5">Total</th>
                                        <th class="column-6">&nbsp;</th>
                                    </tr>

                                    @foreach($products as $key => $product)
                                        @php
                                            $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                            $priceEnd = $price * $carts[$product->id];
                                            $total += $priceEnd;
                                        @endphp
                                        <tr >
                                            <td >
                                                <div >
                                                    <img src="{{ $product->thumb }}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{ $product->name }}</td>
                                            <td class="column-3">{{$price}}</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                           name="product-quanity[{{ $product->id }}]" value="{{ $carts[$product->id] }}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">{{ $priceEnd}}</td>
                                            <td class="p-r-15">
                                                <a href="/carts/delete/{{ $product->id }}">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <div class="flex-w flex-m m-r-20 m-tb-5">
                                    <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text"
                                           name="coupon" placeholder="Coupon Code">

                                    <div
                                        class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                        Apply coupon
                                    </div>
                                </div>

                                <input type="submit" value="Update Cart" formaction="/update-cart"
                                    class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                @csrf
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Cart Totals
                            </h4>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        {{ number_format($total, 0, '', '.') }}
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">

                                <div class="size-100 p-r-18 p-r-0-sm w-full-ssm">

                                    <div class="p-t-15">
                                        <span class="stext-112 cl8">
                                            Thông Tin Khách Hàng
                                        </span>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Tên khách Hàng" required>
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="Số Điện Thoại" required>
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Địa Chỉ Giao Hàng">
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Liên Hệ">
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <textarea class="cl8 plh3 size-111 p-lr-15" name="content"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                               Đặt Hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @else
        <div class="text-center"><h2>Giỏ hàng trống</h2></div>
    @endif  --}}
   

<!DOCTYPE html>
<html lang="en">

<body>
   
    <div class="container-fluid bg-success mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            
        </div>
    </div>
    @include('admin.alert')
    
    <form action="checkout-add" method="POST">
        @if (count($products) != 0) 
            <div class="container-fluid pt-5">
                <div class="row px-xl-5">
                    <div class="col-lg-8 table-responsive mb-5">
                        <table class="table table-bordered text-center mb-0">
                            @php $total = 0; @endphp
                            <thead class="bg-success text-dark">
                                <tr>
                                    <th>Img</th>
                                    <th>Products</th>
                                     <th>Price</th> 
                                    <th>Quantity</th>
                                    <th>Total</th> 
                                    <th>$nbsp</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach($products as $key => $product)
                                @php
                                    
                                    $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                    $priceEnd = $price * $carts[$product->id];
                                    $total += $priceEnd;
                                @endphp
                               
                                <tr>
                                    <th><img src="{{ $product->thumb }}" alt="" style="width: 50px"></th>
                                    <td class="align-middle"> {{$product->name }}</td>
                                    {{-- <td class="align-middle">{{ number_format($price, 0, '', '.')}}</td> --}}
                                    <td class="align-middle">{{number_format($price, 0, '', '.')}}</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            
                                            <input type="number" class="form-control form-control-sm bg-success text-center" name="product-quanity[{{ $product->id }}]" value="{{ $carts[$product->id] }}">
                                            
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ number_format($priceEnd, 0, '', '.')}}</td>
                                   
                                    <td><a href="/carts/delete/{{ $product->id }}">Delete</a></td>
                            
                                </tr>
                            
                            </tbody>
                            @endforeach
                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <div class="flex-w flex-m m-r-20 m-tb-5">
                                    
        
                                    @csrf
                                    <input type="submit" value="Update Cart" formaction="update-cart"
                                        class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" >
                                </div>
                            </div>
                        </table>
                  
                </div>
                <div class="col-lg-4">
                    
                    {{-- <div class="card border-secondary mb-5">
                        <div class="card-header bg-success border-0">
                            <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Subtotal</h6>
                                <h6 class="font-weight-medium">$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold">$160</h5>
                            </div>
                            <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                        </div>
                    </div> --}}
                  
                        <div class="card border-success mb-5">
                            <div class="card-header bg-success border-0">
                                <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                            </div>
                            <div class="card-body">
                                @php $total = 0; @endphp
                                <h5 class="font-weight-medium mb-3">Products</h5>
                               
                               
                               @foreach ($products as $key =>$product )
                               @php
                               $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                               $priceEnd = $price * $carts[$product->id];
                               $total += $priceEnd;
                               @endphp
                                   
                               <div class="d-flex justify-content-between">
                                   <p>{{ $product->name }} </p>
                                   <p>x {{ $carts[$product->id] }}</p>
                                   <p>{{ number_format($priceEnd, 0, '', '.')}}</p>
                               </div>
                               @endforeach
                                <hr class="mt-0">
                                <div class="d-flex justify-content-between mb-3 pt-1">
                                    <h4 class="font-weight-medium">Subtotal</h4>
                                    <h4 class="font-weight-medium">{{ number_format($total, 0, '', '.')}}</h4>
                                </div>
                                
                               
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <h4 class="font-weight-semi-bold mb-4">Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="John" name="name" >
                                        </div>
                                     
                                        <div class="col-md-6 form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type="text" placeholder="example@email.com" name="email" >
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="number" placeholder="+123 456 789" name="phone" >
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" placeholder="123 Street" name="address" >
                                        </div>
                                        <div>
                                            <label for="">Content</label>
                                            <input class="form-control" type="text" placeholder="" name="content" >
                                        </div>

                                       
                                    
                                    </div>
                                </div>
                                <div class="card-footer border-secondary bg-transparent">
                                    <button class="btn btn-lg btn-block btn-success font-weight-bold my-3 py-3">Buy</button>
                                </div>
                             
                            </div>
                           
                        </div>
                       
                  
                </div>
            </div>

           
        @else
            <div class="text-center"><h2>Giỏ hàng trống</h2></div>
        @endif

    </form>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
@endsection 