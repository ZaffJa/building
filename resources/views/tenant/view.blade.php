@extends('layouts.tenant')

@section('content')
    <div class="row">
        <div class="col-sm-12" style="text-align: center">
            <h1>Bulletin Board</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="padding-bottom: 10px">
            <div class="col-sm-4">
                <div class="w3-card-4" style="cursor: pointer">
                    <header class="w3-container w3-blue">
                        <h1>Title</h1>
                    </header>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="w3-card-4">
                    <header class="w3-container w3-blue">
                        <h1>Title</h1>
                    </header>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="w3-card-4">
                    <header class="w3-container w3-blue">
                        <h1>Title</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum
                    <br><br>

                </div>
                <div class="modal-footer">
                    <a href="#" download class="btn btn-info">Download Attachment</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.w3-card-4').on('click', function () {
                $('#myModal').modal();
            })
        });
    </script>
@endsection