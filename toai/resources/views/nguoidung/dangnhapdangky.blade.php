@extends('layouts.master')
@section('title','Trang đăng nhập')
@section('noidung')
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Login / Register</h1>
                        <ul class="breadcrumb-list">
                            <li><a href=".">Home</a></li>
                            <li>Login / Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-content" class="page-wrapper">

            <!-- LOGIN SECTION START -->
<div class="login-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="registered-customers">
                    <h6 class="widget-title border-left mb-50">REGISTERED CUSTOMERS</h6>
                    <form action="{!! route('postDangNhap') !!}" method="post">
                        @include('messages.thongbao')
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="login-account p-30 box-shadow">
                            <p>If you have an account with us, Please log in.</p>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label class="mr-10"> 
                                    <small>
                                        <input type="checkbox" name="signup">Remember login
                                    </small>
                                </label>
                            </div>
                            <button class="submit-btn-1 btn-hover-1" type="submit">login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- new-customers -->
            <div class="col-md-6">
                <div class="new-customers">
                    <form action="{!! route('postDangKy') !!}" method="post">
                        <h6 class="widget-title border-left mb-50">NEW CUSTOMERS</h6>
                         @include('messages.thongbaodangky')
                        <div class="login-account p-30 box-shadow">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <input type="text" name="name" value="{!! old('name') !!}"  placeholder="Full name...">
                                <span class="text text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" value="{!! old('phone') !!}"  placeholder="Phone here...">
                                <span class="text text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" value="{!! old('email') !!}"  placeholder="Email address here...">
                                <span class="text text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password"  placeholder="Password">
                                <span class="text text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirm"  placeholder="Confirm Password">
                                <span class="text text-danger">{{ $errors->first('password_confirm') }}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Register</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Clear</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN SECTION END -->             

</div>
@stop