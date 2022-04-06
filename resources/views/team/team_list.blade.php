@extends('../Layouts.app');

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
            </div>
            <div class="header-title">
                
                <h1>Team Member</h1>
                <small>Team Member list</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="btn-group">
                                <a class="btn btn-success" href="team"> <i class="fa fa-plus"></i> Add Team Member
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel-header">
                                    
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Serial_No</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Update</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pcsirTeam as $pcsir_team)
                                                <tr><td>{{$pcsir_team->id}}</td>
                                                <td><img src="images/team/{{$pcsir_team->team_image}}" height="100px" /></td>
                                                    <td>{{$pcsir_team->team_name}}</td>
                                                    <td>{{$pcsir_team->tem_role}}</td>
                                                        <td><i class="fa fa-trash-o"></i><a href="team_delete/{{$pcsir_team->id}}">Delete</a></td>
                                                        <td><i class="fa fa-pencil"></i><a href="team_edit/{{$pcsir_team->id}}">Update</a></td>

                                                </tr> 
                                            
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>                            
                              </div>

                            </div>
                            
                            <div class="page-nation text-right">
                                <ul class="pagination pagination-large">
                                    <li class="disabled"><span>«</span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li class="disabled"><span>...</span></li>
                                    <li>
                                    <li><a rel="next" href="#">Next</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->
       @endsection
