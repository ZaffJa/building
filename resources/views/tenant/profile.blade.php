@extends('layouts.tenant')
@section('content')
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group" style="text-align: center">
                <img src="/img/user1-128x128.jpg" style="border-radius: 100px;">
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-5">
                    <button class="btn-default">Upload profile picture</button>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-11">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection