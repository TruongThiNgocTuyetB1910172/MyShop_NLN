<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderRequest;
use App\Http\Services\Slider\SliderService;
use App\Models\Slider;
use Illuminate\Http\Request;

class SilderController extends Controller
{

    protected $sliderService;
    public function __construct(SliderService $sliderService)
    {
        $this->sliderService= $sliderService;
    }
    public function create(){
        return view('admin.slider.add',[
            'title' =>'Them slider',
        ]);
    }
    public function store(SliderRequest $request){
        $this->sliderService->create($request);
        return redirect('admin/sliders/add');
        
    }
    public function index(){
        return view('admin.slider.list',[
            'title' =>"Danh sách slider",
            'sliders'=>$this->sliderService->getSlider(),
        ]);
    }
    public function show(Slider $slider){
        return view('admin.slider.edit',[
            'title' =>"Edit Slider" ,
            'slider' => $slider,
          
            
        ]);
    }
    public function update(Slider $slider, SliderRequest $request)
    {
        $result= $this->sliderService->update($request, $slider);
        if($result){
            
            return redirect('/admin/sliders/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->sliderService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công slider'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    
}