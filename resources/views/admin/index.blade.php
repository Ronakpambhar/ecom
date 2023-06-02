@extends('admin.content.link')
@section('linkcss')
<link rel="stylesheet" href="{{ asset('dist/css/login.css') }}">
@endsection
@section('content')
<div id="loginbox">
    <form id="loginform" class="form-vertical" method="post" action="">
        {{ csrf_field() }}
        <div class="control-group normal_text">
            <h3><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" /></h3>
        </div>
        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Username"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required=""
                    />
                  </div>
        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      required=""
                    />
                  </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            <span class="pull-right">
                <input type="submit" name="submit" value="Login" class="btn btn-success" /></span>
        </div>
    </form>


    <form id="recoverform" action="" method="post" class="form-vertical">
        {{ csrf_field() }}
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a
            password.</p>

            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-danger text-white h-100"
                      id="basic-addon1"
                      ><i class="mdi mdi-email fs-4"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Email Address"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to
                    login</a></span>
            <span class="pull-right"><input type="submit" name="submit" value="Recover" class="btn btn-info" /></span>
        </div>
    </form>
</div>
</div>
@endsection
@section('linkjs')
<script src="{{ asset('dist/js/matrix.login.js') }}"></script>
<!-- <script>
    $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
</script> -->
@endsection
