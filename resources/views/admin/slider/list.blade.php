
 @extends('admin.main')

 @section('content')
     <table class="table">
         <thead>
         <tr>
             <th style="width: 50px">ID</th>
             <th>Img</th>
             <th>Title</th>
             <th>Active</th>
             <th>Update</th>
             <th style="width: 100px">&nbsp;</th>
         </tr>
         </thead>
         <tbody>
             @foreach($sliders as $key => $slider)
             <tr>
                 <td>{{ $slider->id }}</td>
                 <td>
                    <a href="{{ $slider->thumb }}" target="_blank">
                        <img src="{{ $slider->thumb }}" width="50px">
                    </a>
                </td>
                 <td>{{ $slider->name }}</td>
                 <td>{!! \App\Helpers\helper::active($slider->active) !!}</td>
                 <td>{{ $slider->updated_at }}</td>
                 <td>
                     <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/{{ $slider->id }}">
                         <i class="fas fa-edit"></i>
                     </a>
                     <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow({{ $slider->id }}, '/admin/sliders/destroy')">
                         <i class="fas fa-trash"></i>
                     </a>
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>
 
     <div class="card-footer clearfix">
         {!! $sliders->links() !!}
     </div>
 @endsection