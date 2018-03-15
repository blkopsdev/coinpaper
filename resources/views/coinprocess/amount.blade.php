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
    <div class="app-wrapper">
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
                                    <img src="/images/process/to.png">
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
                                        <div class="progress-bar" role="progressbar" aria-valuenow="33.4" aria-valuemin="0" aria-valuemax="100"
                                            style="width:33.4%"></div>
                                        <div class="triangle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wrapper">
                <div class="container">
                    <div class="warning-override"></div>
                    <div class="row head-text">
                        <div class="col-xs-12">
                            <h2>
                                <span>Check the amounts and have a look at the transfer details</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row" style="position:relative">
                        <div class="col-with-error col-xs-5">
                            <form class="form-inline form-exchange">
                                <div class="form-group form-group-shadow">
                                    <div class="input-group input-group-currency">
                                        <div class="input-group-addon uppercase">
                                            <span>You have</span>
                                        </div>
                                        <input type="text" class="form-control" name="amount" value="2" autocomplete="off">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle uppercase dropdown-toggle-big">
                                                <b>BTC</b>
                                                <span class="glyphicon menu-down"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group-change">
                                    <a href="#" class="img-change">
                                        <img src="" alt="">
                                    </a>
                                </div>
                                <div class="form-group form-group-shadow dest-cc input-bg-transparent ">
                                    <div class="input-group input-group-currency">
                                        <div class="input-group-addon uppercase">
                                            <span>You get</span>
                                        </div>
                                        <input type="text" readonly="" value="26.56849" class="form-control dark">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle uppercase dropdown-toggle-big">
                                                <b>ETH</b>
                                                <span class="glyphicon menu-down"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-5">
                            <table class="table table-exchange">
                                <tbody>
                                    <tr>
                                        <td class="uppercase">
                                            <span>Exchange rate</span>
                                        </td>
                                        <td>1 BTC = 13.351 ETH</td>
                                    </tr>
                                    <tr>
                                        <td class="uppercase">
                                            <span>Fee included (0.5%)</span>
                                        </td>
                                        <td class="uppercase">0.13351 ETH</td>
                                    </tr>
                                    <tr>
                                        <td class="uppercase">
                                            <span>Estimated arrival</span>
                                        </td>
                                        <td>≈5-30 minutes </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group form-group-exchange pull-right">
                                <a href="/process/sendto" class="btn btn-lg btn-exchange btn-green" role="button">
                                    <span>Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('template_scripts')
@endsection
