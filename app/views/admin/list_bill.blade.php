@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hóa đơn <small>Hóa đơn mới</small>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Danh sách hóa đơn mới</h3>
                            </div>
                            <div class="panel-body">
                            	<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover table-condensed text-center">
									<thead>
										<tr>
											<th class="text-center">STT</th>
											<th class="text-center">Học viên</th>
											<th class="text-center">Khóa hoc</th>
											<th class="text-center">Số tiền</th>
											<th class="text-center">Thời lượng</th>
											<th class="text-center">Địa chỉ</th> 
											<th class="text-center">SDT</th>
                                            <th class="text-center">Phươc thức</th>
                                             <th class="text-center">Nội dung</th>
                                             <th class="text-center">Thời gian</th>
                                            <th class="text-center">Chấp nhận</th>
                                             <th class="text-center">Hủy bỏ</th>

										</tr>
									</thead>
									<tbody>


                                
                            	<?php 
                            	$stt = 0;
                                $bills = Bill::where('status', '=', 1)->get();
                            	foreach ($bills as $bill) {
                            		$stt++;
                            		echo "<tr><td>".$stt."</td>";
                            		echo "<td>".User::find($bill->user_id)->fullname."</td>";
                                    $tut = Tutorial::find($bill->tutorial_id) ;
                                    echo "<td>".$tut->title."</td>";
                                    echo "<td>".$tut->cost."</td>";
                                    echo "<td>".$tut->length."</td>";
                                    echo "<td>".$bill->address."</td>";
                                    echo "<td>".$bill->phone."</td>";
                                    if($bill->phuongthuc == 0){
                                         echo "<td>Thanh toán trực tiếp</td>";
                                    }
                                    else if($bill->phuongthuc == 1){
                                         echo "<td>Thanh toán qua thẻ ATM</td>";
                                    }
                                    else if($bill->phuongthuc == 2){
                                         echo "<td>Phương thức khác</td>";
                                    }
                                    echo "<td>".$bill->description."</td>"; 
                                    echo "<td>".$bill->updated_at."</td>";
                                    echo "<td>".User::find($bill->admin_id)->fullname."</td>";
                                      echo "<td><a href ='cancel/".$bill->id."' class = 'btn btn-default'>Hủy</a></td>";
                                   
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