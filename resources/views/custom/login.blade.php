@extends('layouts.app')
@section('title', 'Login Form')
@section('content')
  <div class="container">
  @if ($errors->any())
  <div class="col-md-4 col-md-offset-4">
      <div class="alert alert-danger" role="alert" >
      <center><h4 class="alert-heading">Ada Yang Salah!</h4></center>
      @foreach ($errors->all() as $error)
      <center><p>{{ $error}}</p></center>
      @endforeach
      <hr>
      <center><p class="mb-0">Silahkan Coba Lagi.</p></center>
    </div>
</div>
  @endif

    <div class="col-md-4 col-md-offset-4">
    <center><h2>Silahkan Here</h2></center>
    <hr>
    <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
          <label for="username">username</label>
          <input class="form-control" value="{{ old('username') }}" required autofocus name="username" placeholder="Eusername">
          <br>
          <label for="exampleInputPassword1">Password</label>
          <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
          <br><br>
        <button type="submit" class="btn btn-primary btn-block">
          Login
        </button>
    </form>
    </div>
  </div>
@endsection

<script >
$('.alert').alert()
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>