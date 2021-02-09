@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url({{ asset('assets/images/login_form.jpg') }})">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Login KelasKITA</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
              @if (session('error') != '')
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
              @endif
              @if (session('failed'))
                  <div class="alert alert-danger">
                      {{ session('failed') }}
                  </div>
              @endif
              <form class="forms-sample" method="POST" action="{{ route('loginPost') }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" autofocus autocomplete="off" name="username" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">
                    Login
                  </button>
                </div>
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection