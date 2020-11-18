@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New User</div>
                            <div class="panel-body">
                                <a href="{{ url('/user') }}" title="Back"><button class="btn btn-warning btn-xs"><i
                                            class="fa fa-mail-reply" aria-hidden="true"></i> Back</button></a>
                                <br />
                                <br />
                                {!! Form::open(['url' => '/user', 'class' => 'form-horizontal', 'files' => true]) !!}
                                @include ('user.form')
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