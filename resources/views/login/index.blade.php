@extends('layout.base')

@section('head')
Login
@endsection

@section('content')
@include('errors', ['errors' => $errors])
<form method="post">
    @csrf
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Login</h5>
          <form class="form-signin">
            <div class="form-label-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus></div>
              <div class="form-label-group mt-2">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <!-- <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div> -->
              <button class="btn btn-primary btn-block mt-3" type="submit">Login</button>
              <hr class="my-4">
              <div class="text-center">
                <small>
                  Not have a login yet? Please <a class="align-center" href="/registrar"> register!</a>
                </small>
              </div>
            </form>
          </div>
        </div>
      </div>
</form>
@endsection