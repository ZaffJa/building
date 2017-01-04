@extends('layouts.staff')

@section('content')
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">New Type</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Enter a new type">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-hover table-responsive" id="table">
        <tbody>
        <tr>
            <th>Type</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Electrical</td>
            <td>11-7-2014</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection