{{-- @extends('admin.main')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <body>
            {!! App\Helpers\helper::menu($menus) !!}
        </body>
    </table>
@endsection --}}
@extends('admin.main')

@section('content')


    <div class="card">
       
    
        
        <div>
            <table class="table table-hover">

                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Active</th>
                    <th>Update</th>
                    <th>Action</th>
                </tr>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->active }}</td>
                        <td>{{ $menu->updated_at}}</td>
                      

                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <form " method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit" data-id={{ $menu->id }}>Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    
            {{-- {{ $menus->link() }} --}}
    </div>
@endsection
