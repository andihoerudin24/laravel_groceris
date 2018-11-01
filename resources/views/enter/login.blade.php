@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Login Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
                   <p class="lead">
                    @if (session('sukses'))
                    <div class="alert alert-info">
                        {{session('sukses')}}
                    </div>

                @endif
                </p>

                <div class="card card-login mb-5">
                    <div class="card-body">
                   @if (session('gagal'))
                    <div class="alert alert-danger">
                          <strong>{{ session('gagal') }}</strong>
                     </div>
                     @elseif(session('ok'))
                     <div class="alert alert-info">
                             {{session('ok')}}
                     </div>
                    @endif
                        <form class="form-horizontal" method="POST" action="{{ route('loginpost') }}">
                         {{ csrf_field() }}
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="email" required="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 d-flex justify-content-between align-items-center">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox" name="remember">
                                        <label for="checkbox0" class="mb-0"> Remember Me? </label>
                                    </div>
                                    <a href="login.html" class="text-light"><i class="fa fa-bell"></i> Forgot password?</a>
                                </div>
                            </div>
                            <div class="form-group row text-center mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
