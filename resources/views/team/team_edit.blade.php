@extends('../Layouts.app');

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
            </div>
            <div class="header-title">
               
                <h1>Team Member</h1>
                <small>Team Member List</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Team Member</li>
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
                                <a class="btn btn-primary" href="team_list"> <i class="fa fa-list"></i> Team Member List
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('team.update',[$pcsirTeam->id])}}" method="post" enctype="multipart/form-data"   class="col-sm-12">
                            {{@csrf_field()}}
                                <div class="col-sm-6 form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{$pcsirTeam->team_name}}" name="team_name" required> 
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Designation" value="{{$pcsirTeam->tem_role}}" name="tem_role" required> 
                                </div>
                                
                                
                                <div class="col-sm-6 form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="team_image" value="{{$pcsirTeam->team_image}}" required>
                                </div> 
                                <div class="col-sm-12 reset-button">
                                    <input type="reset" class="btn btn-warning" value="Reset">    
                                    <input type="submit" class="btn btn-primary" value="Update record">    
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->
@endsection
