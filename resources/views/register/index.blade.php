@extends('layout.base')


@section('head')
Registro
@endsection

@section('content')
@include('errors', ['errors' => $errors])
<form method="post">
    @csrf
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Register</h5>
          <form class="form-signin">
            <div class="form-label-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus>
            <div class="mt-2">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
            </div>
            </div>
            <div class="form-label-group mt-2">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-primary btn-block mt-3" type="submit">Register</button>
            <hr class="my-4">
            <div class="text-center">
              <small>After a success register you are logged automatically.</small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
