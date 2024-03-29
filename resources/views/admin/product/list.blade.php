
 @extends('admin.main')

 @section('content')
     <table class="table">
         <thead>
         <tr>
             <th style="width: 50px">ID</th>
             <th>Img</th>
             <th>Product Name</th>
             <th>Category</th>
             <th>Price</th>
             {{-- <th>Price Sale</th> --}}
             {{-- <th>Active</th> --}}
             <th>Update</th>
             <th style="width: 100px">&nbsp;</th>
         </tr>
         </thead>
         <tbody>
             @foreach($products as $key => $product)
             <tr>
                 <td>{{ $product->id }}</td>
                 <td>
                    <a href="{{ $product->thumb }}" target="_blank">
                        <img src="{{ $product->thumb }}" width="50px">
                    </a>
                </td>
                 <td>{{ $product->name }}</td>
                 <td>{{ $product->menu->name }}</td>
                 <td>{{ $product->price }}</td>
                 {{-- <td>{{ $product->price_sale }}</td> --}}
                 {{-- <td>{!! \App\Helpers\helper::active($product->active) !!}</td> --}}
                 <td>{{ $product->updated_at }}</td>
                 <td>
                     <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                         <i class="fas fa-edit"></i>
                     </a>
                     <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow({{ $product->id }}, '/admin/products/destroy')">
                         <i class="fas fa-trash"></i>
                     </a>
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>
 
     <div class="card-footer clearfix">
         {!! $products->links() !!}
     </div>
 @endsection