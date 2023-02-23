<?php
namespace App\Http\Services\Menu;

use Illuminate\Support\Str;

use App\Models\Menu;


class MenuService{
  
    public function getParent(){
      return Menu::where('parent_id',0)->get();
      
    }
    public function getAll(){
      return Menu::orderbyDesc('id')->paginate(15);
    }
  
    public function create($request){
      try{
      
        // $data=$request->all();
        Menu::create([
            'name' =>(string) $request->input('name'),
            'parent_id' =>(int) $request->input('parent_id'),
            'description' =>(string) $request->input('description'),
            'content' =>(string) $request->input('content'),
            'active'=>(string) $request -> input('active')
        
        ]);
        $request->session()->flash('success', 'Tạo danh mục thành công');
       
        
      }catch(\Exception $err){
        $request->session()->flash('error', $err->getMessage());
        return false;
      }
        return true;
    }
}