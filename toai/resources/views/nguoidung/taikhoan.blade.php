@extends('layouts.master')
@section('title','Tài khoản cá nhân')
@section('noidung')
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">My Account</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="my-account-content" id="accordion2">
                        <!-- My Personal Information -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">My Personal Information</a>
                                </h4>
                            </div>
                            <div id="personal_info" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <form action="{!! route('getCapNhatTTCN') !!}" method="post">
                                        @if(count($errors) > 0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li><div class="alert alert-danger">{!! $error !!}</div></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <div class="new-customers">
                                            @if(Session::has('thongbao_CNTTCN'))
                                                <div class="alert alert-success">{!! Session::get('thongbao_CNTTCN') !!}</div>
                                            @endif
                                            <div class="p-30">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name">Full name</label>
                                                        <input type="hidden" name="id" value="{!! $nd->id !!}">
                                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                        <input type="hidden" name="_method" value="get">
                                                        <input type="text" name="name" id="name" value="{!! $nd->name !!}">
                                                    </div>
                                                    <div class="col-sm-6"><label for="phone">Phone</label>
                                                        <input type="text" name="phone" id="phone" value="{!! $nd->phone !!}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="country">Country</label>
                                                        <input type="text" name="country" id="country" value="{!! $nd->country !!}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="state">State</label>
                                                        <input type="text" name="state" id="state" value="{!! $nd->state !!}">
                                                    </div>
                                                </div>
                                                <label for="company">Company name here</label>
                                                <input type="text" name="company" id="company" value="{!! $nd->company !!}">
                                                <label for="email">Email address here</label>
                                                <input type="text" name="email" id="email" value="{!! $nd->email !!}">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password" value="{!! $nd->password !!}">
                                                <label for="password_confirm">Password_confirm</label>
                                                <input type="password" name="password_confirm" id="password_confirm"  value="{!! $nd->password !!}">
                                                <label for="info">Additional information</label>
                                                <textarea class="custom-textarea" name="info" id="info">{!! $nd->info !!}</textarea>
                                                <div class="checkbox">
                                                    <label class="mr-10"> 
                                                        <small>
                                                            <input type="checkbox" name="signup">I wish to subscribe to the 69 Fashion newsletter.
                                                        </small>
                                                    </label>
                                                    <br>
                                                    <label> 
                                                        
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My shipping address -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#my_shipping">My shipping address</a>
                                </h4>
                            </div>
                            <div id="my_shipping" class="panel-collapse collapse" role="tabpanel" >
                                <div class="panel-body">
                                    <form action="{!! route('getCapNhatTTDCGH') !!}" method="post">
                                        @if(count($errors) > 0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li><div class="alert alert-danger">{!! $error !!}</div></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <div class="new-customers p-30">
                                            @if(Session::has('thongbao_CNDCGH'))
                                                <div class="alert alert-success">{!! Session::get('thongbao_CNDCGH') !!}</div>
                                            @endif
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="name_1">Full name</label>
                                                    <input type="hidden" name="id" value="{!! $nd->id !!}">
                                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                    <input type="hidden" name="_method" value="get">
                                                    <input type="text" name="name" id="name_1" value="{!! $nd->name !!}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="phone_1">Phone</label>
                                                    <input type="text" name="phone" id="phone_1" value="{!! $nd->phone !!}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="country_1">Country</label>
                                                    <input type="text" name="country" id="country_1"  value="{!! $nd->country !!}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="state_1">State</label>
                                                    <input type="text" name="state" id="state_1"  value="{!! $nd->state !!}">
                                                </div>
                                            </div>
                                            <label for="email_1">Email address here</label>
                                            <input type="text" name="email" id="email_1" value="{!! $nd->email !!}">
                                            <label for="address_1">Delivery address</label>
                                            <textarea class="custom-textarea" name="address" id="address_1" value="{!! $nd->address !!}">{!! $nd->address !!}</textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
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
                        <!-- My billing details -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#billing_address">Purchase history</a>
                                </h4>
                            </div>
                            <div id="billing_address" class="panel-collapse collapse" role="tabpanel" >
                                <div class="panel-body">
                                    <form action="{!! route('getCapNhatTTLSMH') !!}" method="post">
                                        @if(count($errors) > 0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li><div class="alert alert-danger">{!! $error !!}</div></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <div class="billing-details p-30">
                                            @if(Session::has('thongbao_CNLSMH'))
                                                <div class="alert alert-success">{!! Session::get('thongbao_CNLSMH') !!}</div>
                                            @endif
                                            <label for="name_2">Full name</label>
                                            <input type="hidden" name="id" value="{!! $nd->id !!}">
                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                            <input type="hidden" name="_method" value="get">
                                            <input type="text" name="name" id="name_2"  value="{!! $nd->name !!}">
                                            <label for="email_2">Email address here</label>
                                            <input type="text" name="email" id="email_2"  value="{!! $nd->email !!}">
                                            <label for="phone_2">Phone</label>
                                            <input type="text" name="phone" id="phone_2"  value="{!! $nd->phone !!}">
                                            <table>
                                                <tr>
                                                    <td class="td-title-1">Số lần mua hàng</td>
                                                    <td class="td-title-2">7</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Điểm tích lũy</td>
                                                    <td class="td-title-2">10</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Tổng số tiền thanh toán bao gồm (VAT)</td>
                                                    <td class="td-title-2">$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="order-total">Order Total</td>
                                                    <td class="order-total-price">$2425.00</td>
                                                </tr>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
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
                        <!-- Payment Method -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#My_payment_method">Payment Method</a>
                                </h4>
                            </div>
                            <div id="My_payment_method" class="panel-collapse collapse" role="tabpanel" >
                                <div class="panel-body">
                                    <form action="{!! route('getCapNhatTTPTTT') !!}" method="post">
                                        @if(count($errors) > 0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li><div class="alert alert-danger">{!! $error !!}</div></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <div class="new-customers p-30">
                                            @if(Session::has('thongbao_CNPTTT'))
                                                <div class="alert alert-success">{!! Session::get('thongbao_CNPTTT') !!}</div>
                                            @endif
                                            <label for="card_type">Card type</label>
                                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                    <input type="hidden" name="_method" value="get">
                                                    <input type="text" name="card_type" id="card_type" id="state_1" value="{!! $nd->card_type !!}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="card_number">Card Number</label>
                                                    <input type="text" name="card_number" id="card_number" value="{!! $nd->card_number !!}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="card_SC">Card Security Code</label>
                                                    <input type="text" name="card_SC" id="card_SC" value="{!! $nd->card_SC !!}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="card_month">Month</label>
                                                    <input type="text" name="card_month" id="card_month" value="{!! $nd->card_month !!}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="card_year">Year</label>
                                                    <input type="text" name="card_year" id="card_year" value="{!! $nd->card_year !!}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">pay now</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 f-right btn-hover-1" type="submit" value="register">continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
</div>
@stop