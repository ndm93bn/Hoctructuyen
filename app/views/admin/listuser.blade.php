@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User <small>Liệt kê thành viên</small>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Danh sách thành viên</h3>
                            </div>
                            <div class="panel-body">
                            	<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover table-condensed text-center">
									<thead>
										<tr>
											<th class="text-center">STT</th>
											<th class="text-center">Họ và tên</th>
											<th class="text-center">Vai trò</th>
											<th class="text-center">Tuổi</th>
											<th class="text-center">Ngày tham gia</th>
											<th class="text-center">Phân quyền</th> 
											<th class="text-center">Chặn</th>
										</tr>
									</thead>
									<tbody>


                                
                            	<?php 
                            	$stt = 0;
                            	foreach ($users as $user) {
                            		$stt++;
                            		echo "<tr><td>".$stt."</td>";
                            		echo "<td>".$user->fullname."</td>";
                            		if($user->level == 1){
                            			echo "<td>Học viên</td>";
                            		}
                            		else if($user->level == 2){
                            			echo "<td>Quản trị viên</td>";
                            		}
                            		else if($user->level == 3){
                            			echo "<td>Admin</td>";
                            		}

                            		echo "<td>".$user->year."</td>";
                            		echo "<td>".$user->created_at."</td>";
                            		echo "<td><a href='phanquyen/$user->id' class = 'btn btn-default'>Phân quyền</a></td>";
                            		echo "<td><a href='' class = 'btn btn-default'>Chặn</a></td> </tr>";
                            	}
                            	?>
                           
							</tbody>
							</table>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 @endsection