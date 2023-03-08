<?php
namespace App\Http\Services\Slider;

use App\Models\Slider;

use Illuminate\Support\Facades\Log;

class SliderService{

    public function getSlider(){
       
            return Slider::orderByDesc('id')->paginate(10);
       
    }
    public function show(){
      return Slider::where('active',1)->orderByDesc('sort_by')->get();
    }
 
    public function create($request){

      
        try{
            Slider::create($request->all());
            $request->session()->flash('success', 'Thêm slider thành công');
        }catch(\Exception $err){
            $request->session()->flash('error', 'Thêm slider lỗi');
            Log::info($err->getMessage());
            return false;
        }
        return true;
 
    }

    public function update($request, $slider){
      
      try{
        $slider->fill($request->input());
        $slider->save();
        $request->session()->flash('success', ' Update Success ');
      }catch (\Exception $err){
        $request->session()->flash('error', 'Update Error');
        Log::info($err->getMessage());
        return false;
      }
      return true;
   
    }

    public function destroy($request)
    {
        $slider = Slider::where('id',$request->input())->first();
        if($slider){
            $slider->delete();
            return true;
        }
        return false;
    }

    
}