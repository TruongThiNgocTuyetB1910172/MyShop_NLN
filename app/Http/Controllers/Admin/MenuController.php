<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFromRequest;
use App\Http\Services\Menu\MenuService;
use GuzzleHttp\Psr7\Message;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
        
    }
    public function create(){
        return view('admin.menu.add',[
            'title'=>'Thêm danh mục mới',
            'menus'=>$this->menuService->getParent(),
    ]);
    }
    public function store(CreateFromRequest $request){
       $result = $this->menuService->create($request);
       return redirect()->back();
    }
    public function index(){
        $menus =$this->menuService->getAll();
        
        return view('admin.menu.list',[
            'title'=>'Danh sach danh muc moi',],compact('menus'));
   
    }
}