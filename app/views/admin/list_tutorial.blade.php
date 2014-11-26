@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Khóa học <small>Liệt kê khóa học</small>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Danh sách khóa học</h3>
                            </div>
                            <div class="panel-body">
                            	<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover table-condensed text-center">
									<thead>
										<tr>
											<th class="text-center">STT</th>
											<th class="text-center">Tên khóa học</th>
											<th class="text-center">Loại khóa học</th>
											<th class="text-center">Lượt xem</th>
											<th class="text-center">Ngày tạo</th>
                                            <th class="text-center">Người tạo</th>
											<th class="text-center">Quản trị khóa học</th> 
											<th class="text-center">Chỉnh sửa</th>
										</tr>
									</thead>
									<tbody>


                                
                            	<?php 
                            	$stt = 0;
                            	foreach ($tuts as $tut) {
                            		$stt++;
                            		echo "<tr><td>".$stt."</td>";
                            		echo "<td>".$tut->title."</td>";
                            		if($tut->locked == true){
                                        echo "<td>Có phí</td>";
                                    }
                                    else{
                                        echo "<td>Miễn phí</td>";
                                    }

                            		echo "<td>".$tut->view."</td>";
                            		echo "<td>".$tut->created_at."</td>";
                                    echo "<td>".User::find($tut->user_id)->fullname."</td>";
                            		echo "<td><a href='manage/$tut->id' class = 'btn btn-default'>Quản trị khóa học</a></td>";
                            		echo "<td><a href='edit/$tut->id' class = 'btn btn-default'>Chỉnh sửa</a></td> </tr>";
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