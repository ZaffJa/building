@extends('layouts.tenant')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Give your complaint</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea name="details" id="details" cols="30" rows="10"
                              class="form-control"></textarea>
                </div>
                <select class="form-control" name="type">
                    <option>Please select a complaint</option>
                    <option>Electrical related</option>
                    <option>Water related</option>
                </select>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('textarea').ckeditor();
        });
    </script>
@endsection