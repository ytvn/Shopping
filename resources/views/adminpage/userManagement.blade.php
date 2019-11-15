@extends('layouts.adminpage')
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">User Management</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add User
            </button>
            <table id="tableStaffs" class="table table-bordered">
                <thead>
                    <tr>
                        <th>User_ID</th>
                        <th>Full_Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>

                        <td>
                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"
                            type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-trash"></i>
                            </button>

                            

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Are you sure to want delete ?</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                    

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-icon waves-effect waves-light btn-success m-b-5">
                                <i class="fa fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- sample modal content -->
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Add User</h4>
                            <div class="row">
                                <div class="col-12">
                                        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="/api/admin/product">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="username" class="form-control" placeholder="User name...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Password </label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Role</label>
                                                <a href="#" id="inline-role" data-type="select" data-pk="1" data-value=""
                                                data-title="Select sex" class="editable editable-click" style="color: gray;">not
                                                selected</a>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Date</label>
                                                <a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15"
                                                data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY"
                                                data-pk="1" data-title="Select Date of birth" class="editable editable-click"></a>
                                            </div>
                                            <div class="form-group">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-success" value="Add">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
        </div>
        </div>
@endsection