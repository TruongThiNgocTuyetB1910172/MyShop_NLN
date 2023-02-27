{{-- @extends('admin.main')
@section('head')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
@endsection
@section('content')

<form action="" method="">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="menu">Name</label>
        <input type="text" class="form-control" value="{{ $menu->name }}"  name="name"  placeholder="nhap ten danh muc">
      </div>
      <div class="form-group">
        <label for="menu">Parent</label>
        <select name="parent_id" id="" class="form-control">
            <option value="0" {{ $menu->parent_id == 0 ? 'selected':''}}>Danh muc cha</option>
            @foreach ($menus as $menuParent )
            <option value="{{ $menuParent->id }}"{{ $menu->parent_id == $menuParent->id ? 'selected':''}}>{{ $menuParent->name }}</option>
            @endforeach
              
           
        </select>
      </div>
      <div class="form-group">
        <label for="menu">Mo ta ngan</label>
        <textarea class="form-control"  name="description" >{{ $menu->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="menu">Mo ta chi tiet</label>
        <textarea class="form-control"  name="content" >{{ $menu->content }}</textarea>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="active" value="1" name="active" {{ $menu->active ==1 ? 'checked=""':'' }}>
        <label class="form-check-label" for="active">Yes</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="noactive" value="0" name="active" {{ $menu->active ==0 ? 'checked=""':'' }}>
        <label class="form-check-label" for="noactive">No</label>
      </div>
      
    
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
    
@endsection
@section('footer')
<script>
    CKEDITOR.replace( 'content' );
    </script>
@endsection --}}

@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Danh Mục</label>
                <input type="text" name="name" value="{{ $menu->name }}" class="form-control"  placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label>Danh Mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0" {{ $menu->parent_id == 0 ? 'selected' : '' }}> Danh Mục Cha </option>
                    @foreach($menus as $menuParent)
                        <option value="{{ $menuParent->id }}"
                            {{ $menu->parent_id == $menuParent->id ? 'selected' : '' }}>
                            {{ $menuParent->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Mô Tả </label>
                <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ $menu->content }}</textarea>
            </div>


            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active"
                           name="active" {{ $menu->active == 1 ? 'checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active"
                           name="active" {{ $menu->active == 0 ? 'checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection