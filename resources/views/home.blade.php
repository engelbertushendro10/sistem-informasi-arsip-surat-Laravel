@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row page-titles">
                        <div class="col-md-6 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- =================== --}}
    <div class="row">
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Surat Masuk</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-success"></i>
                            {{$surat_masuk->count()}}</h2>
                        <span class="text-muted">Total Surat</span>
                    </div>
                    <span class="text-success">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Surat Keluar</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i></h2>
                        <span class="text-muted">Total Surat</span>
                    </div>
                    <span class="text-info">30%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    {{-- =================== --}}

</div>
@endsection

{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM SURAT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    {!! Html::style('css/custom.css') !!}
    <!-- Styles -->
    <style>
        .tombol {
            background: #2C97DF;
            color: white !important;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 5px solid #2A80B9;
            padding: 10px 20px !important;
            text-decoration: none;
            font-family: sans-serif;
            font-size: 11pt;
            margin: 10px;
        }

        html,
        body {
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#87e0fd+0,53cbf1+40,05abe0+100;Blue+3D+%23+16 */
            background: #87e0fd;
            /* Old browsers */
            background: -moz-linear-gradient(top, #87e0fd 0%, #53cbf1 40%, #05abe0 100%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #87e0fd 0%, #53cbf1 40%, #05abe0 100%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #87e0fd 0%, #53cbf1 40%, #05abe0 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#87e0fd', endColorstr='#05abe0', GradientType=0);
            /* IE6-9 */
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: white;
            font-weight: bold;
        }

        /*   .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
*/
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title animated rubberBand">
                SIM SURAT
            </div>
            <p>Sistem Manajemen Surat</p>
            <div class="container">
                <div class="card">
                    <a class="tombol" href="{{ route('surat.index') }}">Daftar Surat Masuk/Keluar</a>
                </div>
                <div class="card">
                    <a class="tombol" href="{{ route('surat.create') }}">Buat Surat Masuk/Keluar</a>
                </div>
                <div class="card">
                    <a class="tombol" href="{{ route('disposisi.index') }}">Daftar Disposisi</a>
                </div>
                <div class="card">
                    <a class="tombol" href="{{ route('disposisi.create') }}">Buat Disposisi</a>
                </div>
                <div class="card">
                    <a class="tombol" href="{{ route('disposisi.create') }}">Buat Disposisi</a>
                </div>
                <div class="card">
                    <a class="tombol" href="{{ url('/surat/laporan') }}">Laporan Surat Masuk/Keluar</a>
                </div>
            </div>
            <div class="links">





            </div>
        </div>
    </div>
</body>

</html> --}}