@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        {{-- @include('admin.sidebar') --}}

        {{-- <div class="col-md-9"> --}}
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="panel panel-default">
                        {{-- <div class="panel-heading"><a href="{{ url('/suratkeluar') }}" title="Back"><button
                            class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Back</button></a> Laporan Surat Keluar</div> --}}
                    <div class="panel-body">
                        {!! Form::open(['url' => 'suratkeluar/laporan','method' => 'get','class' => 'form-inline']) !!}
                        <div class="form-group">
                            <label for="" class="control-label">Dari </label>
                            {!! Form::date('from', $from, ['class'=>'form-control input-sm']) !!}
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Sampai</label>
                            {!! Form::date('to', $to, ['class'=>'form-control input-sm']) !!}
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Surat </label>
                            {!! Form::select('tipe', ['keluar' => 'Surat keluar'], $tipe,
                            ['class' =>
                            'form-control input-sm']) !!}
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i>
                            Tampilkan</button>
                        <a href="/laporansk/cetak" class="btn btn-outline-info btn-sm" target="_blank"> <i
                                class="fa fa-print"></i>
                            Cetak</a>
                        {{-- <button type="button" class="btn btn-default btn-sm cetak"><i class="fa fa-print"></i>
                                Cetak</button> --}}

                        {!! Form::close() !!}


                        <div id="cetak">
                            <h1 class="text-center head hide" style="text-transform: uppercase;">LAPORAN SURAT
                                {{ $tipe }}</h1>
                            <br><br>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Surat</th>
                                        <th>No. Agenda</th>
                                        <th>Jenis Surat</th>
                                        <th>Tanggal Kirim</th>
                                        @if ($tipe=='masuk')
                                        <th>Tanggal Terima</th>
                                        @endif
                                        <th>Pengirim</th>
                                        <th>Perihal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($surats as $si => $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->no_surat }}</td>
                                        <td>{{ $s->no_agenda }}</td>
                                        <td>{{ $s->jenis_surat->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($s->tanggal_kirim)->format('d/m/Y') }}</td>
                                        @if ($tipe=='masuk')
                                        <td>{{ \Carbon\Carbon::parse($s->tanggal_terima)->format('d/m/Y') }}</td>
                                        @endif
                                        <td>{{ $s->pengirim }}</td>
                                        <td>{{ $s->perihal }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

@section('scripts')
<script>
    $('.cetak').click(function () {
        $('.head').removeClass('hide');
        $('#cetak').print();
        $('.head').addClass('hide');
    })
</script>
@endsection