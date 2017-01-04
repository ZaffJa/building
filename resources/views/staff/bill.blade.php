@extends('layouts.staff')

@section('content')
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="type" class="col-sm-2 control-label">New Bill Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="type" placeholder="Enter a new type">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" cols="10" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Amount (RM)</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="amount" placeholder="Enter an amount">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-11">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-hover table-responsive" id="table">
        <tbody>
        <tr>
            <th>Type of bill</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Building rental</td>
            <td>Description Description Description Description Description <a href="">read more</a></td>
            <td>RM 50.00</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection