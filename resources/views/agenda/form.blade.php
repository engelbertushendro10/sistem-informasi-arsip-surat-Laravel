<div class="form-group {{ $errors->has('nama_surat') ? 'has-error' : ''}}">
    {!! Form::label('nama_surat', 'Nama Surat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_surat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nama_surat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_surat') ? 'has-error' : ''}}">
    {!! Form::label('no_surat', 'No Surat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('no_surat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('no_surat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat_surat') ? 'has-error' : ''}}">
    {!! Form::label('alamat_surat', 'alamat surat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat_surat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('alamat_surat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('perihal_surat') ? 'has-error' : ''}}">
    {!! Form::label('perihal_surat', 'perihal surat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('perihal_surat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('perihal_surat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tujuan') ? 'has-error' : ''}}">
    {!! Form::label('tujuan', 'Tujuan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tujuan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tujuan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('masuk') ? 'has-error' : ''}}">
    {!! Form::label('masuk', 'Tanggal masuk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('masuk', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('masuk', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group tglTerima {{ $errors->has('keluar') ? 'has-error' : ''}}">
    {!! Form::label('keluar', 'Tanggal Keluar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('keluar', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('keluar', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
