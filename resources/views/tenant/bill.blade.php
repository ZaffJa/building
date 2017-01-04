@extends('layouts.tenant')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="w3-card-2">
                <div style="text-align: center; padding: 10px;margin: 10px;">
                    <div class="row">
                        <div style="background-color: black">
                            <h6 style="color:white">725138216378732812 <i class="fa fa-info-circle"></i></h6>
                        </div>
                        <h5><span style="color: green">Bill date</span> 30 Jan 2017</h5>
                        <h1>RM 300.00</h1>
                        <h5><span style="color: grey">Due</span><span style="color: red"> 30 Jan 2017</span></h5>
                        <button class="btn btn-success btn-lg">PAY NOW</button>
                    </div>
                    <br>
                    <div class="row" style="background-color: whitesmoke">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Bill</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Water usage</td>
                                <td>RM 150.00</td>
                            </tr>
                            <tr>
                                <td>Electrical usage</td>
                                <td>Rm 150.00</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="w3-card-2">
                <table class="table" id="stack_table">
                    <thead>
                    <tr>
                        <th>Payment Date</th>
                        <th>Amount</th>
                        <th>Download Invoice</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>27/8/2013</td>
                        <td>RM 20.00</td>
                        <td><a href="#" download><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('styles')
    <style>
        span {
            font-weight: bolder;
        }
    </style>
@endsection

@section('scripts')
    $('#stack_table').stacktable();
@endsection