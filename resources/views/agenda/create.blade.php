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
                            {{-- <div class="panel-heading">Create New Surat</div> --}}
                            <div class="panel-body">
                                <a href="{{ url('/agenda') }}" title="Back"><button class="btn btn-warning btn-xs"><i
                                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <br />
                                <br />

                                {!! Form::open(['url' => '/agenda', 'class' => 'form-horizontal', 'files' => true]) !!}

                                @include ('agenda.form')

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
<!-- <script>
    jQuery(document).ready(function () {
            if ($('.tipe').val()=='keluar') {
                $('.tglTerima').hide();
            } else {
                $('.tglTerima').show();
            }
            $('.tipe').on('change', function () {
                if ($(this).val()=='keluar') {
                    $('.tglTerima').hide();
                } else {
                    $('.tglTerima').show();
                }
            })
        });
</script> -->
@endsection