{{-- Set Template Body Classes --}}
<?php
    $templateBodybodyClasses = '';
?>

@extends('admin.layouts.auth')

@section('template_title')
    Process
@endsection

@section('style-sheets')
{!! HTML::style(asset('/assets/css/admin/process.css'), array('type' => 'text/css', 'rel' => 'stylesheet')) !!}
@endsection

@section('content')
<div id="app">
    <div class="app-wrapper" data-reactroot="">
        <!-- <div class="navbar-wrapper">
            <div class="container">
                <ul class="nav nav-pills pull-right nav-landing">
                    <li class="li-header-email">
                        <div>
                            <span>Sending money as</span>
                            <a href="/profile" class="span-header-email-link">
                                <span class="span-header-email">jurick.joling@gmail.com</span>
                            </a>
                        </div>
                    </li>
                    <li class="divider-vertical">
                        <a href="/affiliate">Affiliate Program</a>
                    </li>
                    <li>
                        <a href="">
                            <span>My account</span>
                        </a>
                    </li>
                    <li>
                        <a href="/auth/logout" class="nav-auth nav-auth-login animated-all">Logout</a>
                    </li>
                </ul>
                <a href="/" class="logo">
                    <img src="/a052341d96320fbeab6a9d477359a9a2.svg" alt="Changelly">
                </a>
            </div>
            <div></div>
        </div> -->
        <div>
            <div class="container-fluid transaction-progress">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="row icons">
                                <div class="col-xs-2">
                                    <img src="/images/process/green_from.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/green_amounts.png">
                                </div>
                                <div class="col-xs-2" style="margin-left:-3px">
                                    <img src="/images/process/green_to.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/confirm.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/sending.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/exchanging.png">
                                </div>
                            </div>
                            <div class="row icons">
                                <div class="col-xs-2">
                                    <span>From</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>Amounts</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>Send to</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>Confirmation</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>Sending</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>Exchanging</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50.099999999999994" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50.1%;"></div>
                                        <div class="triangle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-back">
                <div class="container">
                    <a href="/process/amounts">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAARCAMAAADT/c3XAAAAKlBMVEWzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7PVONgmAAAADnRSTlMACSEiI2VmZ6e+v8Lg4W+1yJIAAAAvSURBVHgBY4ACZk5GGIuHFQuLDcpiQmKx42ExcHMACZhudsJsXjYcbFasbBYuRgB8UAFYODedtwAAAABJRU5ErkJggg==">
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="bg-wrapper">
                <div class="container">
                    <div class="row head-text">
                        <div class="col-xs-12">
                            <h2 style="display: inline-block;">
                                <span>Enter the recipient's ETH address (your Ethereum wallet)</span>
                            </h2>
                            <!-- <span class="circle animated circle-gray">?</span> -->
                            <span class="inline-block"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10">
                            <form class="form-inline form-address">
                                <div class="form-group">
                                    <span class="error">
                                        <label for="payout_address" class="error red"></label>
                                    </span>
                                    <div class="input-group input-group-address">
                                        <div class="input-group-addon uppercase">ETH address</div>
                                        <input type="text" id="address" class="form-control" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-2">
                            <div class="pull-right">
                                <a href="/process/confirmation" class="btn btn-lg btn-address btn-green" role="button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row row-footer-bottom">
                    <div class="col-xs-6">
                        <a href="/terms-of-use" class="a-footer-gray">Terms of use</a>
                        <a href="/privacy-policy" class="a-footer-gray">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('template_scripts')
@endsection