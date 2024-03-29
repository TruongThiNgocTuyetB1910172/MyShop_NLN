<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductAdminService;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    
    protected $productService;
    public function __construct(ProductAdminService $productService)
    {
        $this->productService = $productService;
        
    }
    public function index(){
        return view('admin.product.list',[
            'title' =>' Danh sách sản phẩm',
            'products' => $this->productService->get(),
        ]);
    }
    public function create(){
        return view('admin.product.add',[
            'title' =>'Thêm sản phẩm mới',
            'menus'=> $this->productService->getMenu(),
               
        ]);

        
    }
    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);

        return redirect('admin/products/add');
    }

    public function show(Product $product){
       
        return view('admin.product.edit',[
            'title'=>'Chỉnh sửa sản phẩm '.$product->name,
            'menu'=>$product,
            'menus'=>$this->productService->getMenu(),

        ]);
    }

    public function update(Product $product, ProductRequest $request)
    {
        $this->productService->update($request, $product);

        return redirect('/admin/menus/list');
    }

    public function destroy(Request $request):JsonResponse
    {
        $result = $this->productService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}