@extends('admin.main')
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
 @endsection
