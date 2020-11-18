@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->
<div class="col-sm-12">
            <div class="card">
                <div class="card-block">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Disposisi</div>
                    <div class="panel-body">
                        <a href="{{ url('/disposisi') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <br />
                        <br />


                        {!! Form::open(['url' => '/disposisi', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('disposisi.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
@endsection
