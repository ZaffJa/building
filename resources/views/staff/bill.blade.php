@extends('layouts.staff')

@section('content')
    <div class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="type" class="col-sm-2 control-label">New Bill Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="type" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description"
                              cols="10" rows="10" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Amount (RM)</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="amount" required>
                </div>
            </div>
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Amount (RM)</label>
                <div class="col-sm-10">
                    <select name="user" id="user" class="form-control">
                        <option value="">Please select a user</option>
                        <option value="Tenant">Tenant</option>
                        <option value="Landlord">Landlord</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <span class="col-sm-offset-11">
                      <button class="btn btn-success add-row">Add</button>
                </span>
            </div>
        </div>
    </div>
    <div id="form">
        <table class="table table-hover table-responsive" id="table">
            <tbody>
            <tr>
                <th>Select</th>
                <th>Type of bill</th>
                <th>Description</th>
                <th>User</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td><input type='checkbox' name='record' id="record"></td>
                <td>Building rental</td>
                <td>Description Description Description Description Description....<a href="">read more</a></td>
                <td>Tenant</td>
                <td>RM 50.00</td>
            </tr>
            </tbody>
        </table>
        <div style="text-align: right">
            <button class="btn btn-danger delete-row">Delete</button>
            <button class="btn btn-primary" type="button">Submit</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".add-row").click(function () {
                var type = $("#type").val();
                var description = $("#description").val();
                var user = $("#user").val();
                var amount = $("#amount").val();
                var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + type + "</td><td>" + description +
                             "</td><td>" + user + "</td><td>RM" + amount + "</td></tr>";
                $("table tbody").append(markup);
            });

            // Find and remove selected table rows
            $(".delete-row").click(function () {
                $("table tbody").find('input[name="record"]').each(function () {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>

@endsection