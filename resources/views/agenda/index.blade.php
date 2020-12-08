@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        {{-- @include('admin.sidebar') --}}

        {{-- <div class="col-md-9"> --}}
        {{-- <div class="panel panel-default">
            <div class="panel-heading">agenda</div>
            <div class="panel-body">
                <a href="{{ url('/agenda/create') }}" class="btn btn-success btn-sm" title="Add New Surat">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>

        {!! Form::open(['method' => 'GET', 'url' => '/search', 'class' => 'navbar-form navbar-right', 'role' =>
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
        {!! Form::close() !!} --}}

        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <a href="{{ url('/agenda/create') }}" class="btn btn-success btn-sm" title="Add New Surat">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Surat</th>
                                    <th>No Surat</th>
                                    <th>Alamat </th>
                                    <th>Perihal</th>
                                    <th>Tujuan</th>
                                    <th>Tgl Masuk</th>
                                    <th>Tgl Keluar</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agenda as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->nama_surat }}</td>
                                    <td>{{ $item->no_surat }}</td>
                                    <td>{{ $item->alamat_surat }}</td>
                                    <td>{{ $item->perihal_surat }}</td>
                                    <td>{{ $item->tujuan }}</td>
                                    <td>{{ $item->masuk }}</td>
                                    <td>{{ $item->keluar }}</td>
                                    <td>
                                        <a href="{{ url('/agenda/' . $item->id . '/edit') }}" title="Edit agenda"><button
                                                class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i>
                                                Edit</button></a>
                                        {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/agenda', $item->id],
                                        'style' => 'display:inline'
                                        ]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>
                                        Delete',
                                        array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete agenda',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $agenda->links() }}
                        <div class="pagination-wrapper"> {!! $agenda->appends(['search' =>
                            Request::get('search')])->render() !!} </div>
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