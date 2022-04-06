@extends('Layouts.app');

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <h1>User</h1>
                <small>User list</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">User</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="user-list.html"> <i class="fa fa-list"></i> User List
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-12">
                                <div class="col-sm-6 form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter firstname" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>CNIC NO:</label>
                                    <input type="text" class="form-control" placeholder="Enter CNIC" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>NTN NO:</label>
                                    <input type="text" class="form-control" placeholder="Enter NTN no" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Contact No:</label>
                                    <input type="text" class="form-control" placeholder="Enter Contact NO:" required>
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label>User Type:</label>
                                    <select class="form-control" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Customer</option>
                                        <option>Supplier</option>


                                    </select>
                                </div>

                                <div class="col-sm-12 form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Address" required>
                                </div>




                                <div class="col-sm-12 form-group">
                                    <label>Description:</label>
                                    <textarea id="some-textarea" class="form-control" rows="3" placeholder="Enter text ..."></textarea>
                                </div>






                                <div class="col-sm-12 reset-button">
                                    <a href="#" class="btn btn-warning">Reset</a>
                                    <a href="#" class="btn btn-success">Save</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->
@endsection
