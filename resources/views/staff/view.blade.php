@extends('layouts.staff')

@section('content')
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <table class="table table-hover table-responsive" id="table">
        <tbody>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Attachment</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Title</td>
            <td>Bacon venison chicken flank fatback doner.... <a href="">read more</a>
            </td>
            <td><a href=""><i class="fa fa-download fa-2x"></i></a></td>
            <td>11-7-2014</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('textarea').ckeditor();
        });
    </script>
@endsection

