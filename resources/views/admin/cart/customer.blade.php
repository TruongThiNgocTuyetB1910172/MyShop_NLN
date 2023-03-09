
@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
           
            <th>Product Customer</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
       
            <th>Date order</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($customers as $key => $customer)
            <tr>
                <td>{{ $customer->id }}</td>
               
                <td>{{ $customer->name }}</td>
               
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone}}</td>
                <td>{{ $customer->address}}</td>
                <td>{{ $customer->updated_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/custromers/view/{{ $customer->id }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $customer->id }}, '/admin/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
        {{-- {!! $customer->links() !!} --}}
    </div>
@endsection