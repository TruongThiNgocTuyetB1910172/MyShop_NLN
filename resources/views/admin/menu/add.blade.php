@extends('admin.main')
@section('head')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
@endsection
@section('content')

<form action="" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="menu">Name</label>
        <input type="text" class="form-control"  name="name"  placeholder="write category">
      </div>
      <div class="form-group">
        <label for="menu">Parent</label>
        <select name="parent_id" id="" class="form-control">
            <option value="0">Parent category</option>
            @foreach ($menus as $menu )
            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
            @endforeach
              
           
        </select>
      </div>
      <div class="form-group">
        <label for="menu">Desciption</label>
        <textarea class="form-control"  name="description" ></textarea>
      </div>
      <div class="form-group">
        <label for="menu">Desciption Detail</label>
        <textarea class="form-control"  name="content" ></textarea>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="active" value="1" name="active">
        <label class="form-check-label" for="active">Yes</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="noactive" value="0" name="active">
        <label class="form-check-label" for="noactive">No</label>
      </div>
      
    
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
    
@endsection
@section('footer')
<script>
    CKEDITOR.replace( 'content' );
    </script>
@endsection