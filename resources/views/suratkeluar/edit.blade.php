@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        {{-- @include('admin.sidebar') --}}
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            {{-- <div class="panel-heading">Edit Surat #{{ $surat->id }}</div> --}}
                            <div class="panel-body">
                                <a href="{{ url('/suratkeluar') }}" title="Back"><button class="btn btn-warning btn-xs"><i
                                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <br />
                                
                                <br />
                                {!! Form::model($surat, [
                                'method' => 'PATCH',
                                'url' => ['/suratkeluar', $surat->id],
                                'class' => 'form-horizontal',
                                'files' => true
                                ]) !!}

                                @include ('suratkeluar.form', ['submitButtonText' => 'Update'])

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

@section('scripts')
<script>
    jQuery(document).ready(function () {
            @if ($surat->tipe=='keluar')
            $('.tglTerima').hide();
            @endif
        });
</script>
@endsection