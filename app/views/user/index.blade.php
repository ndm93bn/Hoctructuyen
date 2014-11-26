@extends('user.main')

@section('content')
	<h3>Trang cá nhân - {{$user->fullname}}</h3>
	<div class="panel panel-default">
     <div class="panel-heading">
       <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Khóa học của tôi</h3>
    </div>
    <div class="panel-body">
       <?php
       $bills = Bill::where('user_id', '=', Session::get('user_id'))->get();
       foreach ($bills as $bill) {
          $tut = Tutorial::find($bill->tutorial_id);
          echo "<h4>".$tut->title."</h4>";
          echo "Tình trạng:";
          if($bill->status == 0){
          	echo "Đang chờ thanh toán";
          }
          else  if($bill->status == 1){
          	if((time() - $bill->start ) < $tut->length*24*60*60 ){
          		echo "Đang trong thời gian học (còn ".($tut->length*24*60*60 + time() - $bill->start )/(24*60*60)." ngày)";
          	}
          	else{
          		echo "Đã hết thời gian học";
          	}
          }
          else{
          	echo "Hóa đơn khóa học đã bị hủy";
          }

          echo "<hr>";
       }
       ?>
                              
    </div>
    </div>

	

@endsection