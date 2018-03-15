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
                                    <img src="/images/process/green_confirm.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/green_sending.png">
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
                                        <div class="progress-bar" role="progressbar" aria-valuenow="83.5" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 83.5%;"></div>
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
                    <div class="row send-row">
                        <div class="send-info">
                            <div class="warning-override"></div>
                            <div class="transaction-id text-center">
                                <span>Transaction ID</span>:
                                <span class="text-bold">f84e011498fd</span>
                            </div>
                            <h3 class="text-center">
                                <span>Send 2 BTC to the address below</span>
                            </h3>
                            <div class="text-center">
                                <span>The whole amount should be sent as one transaction</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row pay-col_container animated">
                            <div class="pay-col-wide">
                                <div class="pay-col-row">
                                    <div class="addr-col">
                                        <div class="clipboard_container">
                                            <div class="address_container">
                                                <div class="address-wrapper">
                                                    <span class="address">3LVeH3nPHJMBaw7aupBoSmkCjJTkoM1oSj</span>
                                                    <span>
                                                        <span class="clipboard">
                                                            <span class="address-copy"></span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="chan">
                                                    <span>Copy address</span>
                                                </div>
                                            </div>
                                            <p class="chan qr-code-message">or scan QR-code</p>
                                            <div class="qr-code">
                                                <div>
                                                    <canvas height="180" width="180" style="height: 180px; width: 180px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="">
                            <div class="troubles">
                                <span>Having troubles?</span>
                            </div>
                            <table class="options animated">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="dot">1</div>
                                        </td>
                                        <td>
                                            <span>Check your transaction in
                                                <a target="_blank" href="https://blockchain.info">block explorer</a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="dot">2</div>
                                        </td>
                                        <td>
                                            <span>Contact</span>
                                            <a href="#">
                                                <span>support</span>
                                            </a>
                                            <br>Your transaction #f84e011498fd</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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