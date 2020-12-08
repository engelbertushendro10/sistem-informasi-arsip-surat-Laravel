@extends('layouts.app4')

@section('content')
<div class="container">
    <div class="row">
        {{-- @include('admin.sidebar') --}}

        {{-- <div class="col-md-9"> --}}
        {{-- <div class="panel panel-default">
            <div class="panel-heading">User</div>
            <div class="panel-body">
                <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>

        {!! Form::open(['method' => 'GET', 'url' => '/cariuser', 'class' => 'navbar-form navbar-right', 'role' =>
        'search']) !!}
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..."
                value="{{ request('search') }}">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        {!! Form::close() !!}
        <br />
        <br /> --}}
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Hak</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->hak }}</td>
                                    <td>
                                        <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Edit User"><button
                                                class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i> Edit</button></a>
                                        {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/user', $item->id],
                                        'style' => 'display:inline'
                                        ]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete',
                                        array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete User',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $user->appends(['search' =>
                            Request::get('search')])->render()
                            !!} </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
{{-- </div> --}}
</div>
</div>
@endsection