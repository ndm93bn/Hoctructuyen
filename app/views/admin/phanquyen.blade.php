@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {{$user->fullname}} <small>Phân quyền thành viên</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Phân quyền thành viên</h3>
                            </div>
                            <div class="panel-body">
                                <form method= "post" action = "">
                                    <label>Chọn vai trò</label>
                                    <select name = "level" class = "form-control">
                                        <option value="1" <?php if($user->level == 1) echo "selected" ;?>>Học viên</option>
                                        <option value="2" <?php if($user->level == 2) echo "selected" ;?>>Quản trị viên</option>
                                        <option value="3" <?php if($user->level == 3) echo "selected" ;?>>Admin</option>
                                    </select>
                                    <br><input type="submit" class = "btn btn-default" value= "Thay đổi">
                                </form>
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 @endsection