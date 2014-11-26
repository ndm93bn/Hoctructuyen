@extends('main.main')
@section('content')
<div class = "page-title"><h3 ><b>Hóa đơn đăng kí khóa học</b></h3></div>
 <div class="panel panel-default">
     <div class="panel-heading">Thông tin cơn bản</div>
    <div class="panel-body">
        <form method="post" action = ""> 
       <label>Người đăng kí: {{User::find(Session::get('user_id'))->fullname}}</label> 
        <br>
        <label>Tên khóa học: {{$tut->title}}</label>
        <br>
        <label>Thời lượng khóa học: {{$tut->length}} ngày</label>
        <br>
        <label>Học phí: {{$tut->cost}} vnđ</label>
        <br>
        <?php
        if($result){
         ?>
        <label>Hình thức than toán:
            <?php
            if($bill->phuongthuc == 0) echo "Thanh toán trực tiếp";
             else if($bill->phuongthuc == 1) echo "Thanh toán qua thẻ ATM";
              else  if($bill->phuongthuc == 2) echo "Hình thức khác";

            ?></label>
        <br>
        <label>Đia chỉ: {{$bill->address}}</label>
        <br>
        <label>Số điện thoại: {{$bill->phone}}</label>
        <br>
        <label>Mô tả: {{$bill->description}}</label>
        <br>
        <label>Cảm ơn bạn đã đăng kí tham gia khóa học {{$tut->title}}, chúng tôi sẽ nhanh chóng liên hệ cho bạn trong vòng 48 giờ để hướng dẫn chi tiết
            về việc thanh toán và tham gia khóa học. </label>
        <?php
        }
        else{
         ?>
        
        <hr>

        <label>Hình thức thành toán</label>
        <select name = 'phuongthuc' class = "form-control">
            <option value="0" selected>Thanh toán trực tiếp</option>
            <option value="1">Thanh toán qua thẻ ATM</option>
            <option value="2">Hình thức khác</option>
        </select>
        <br>
        <label>Địa chỉ</label>
        <input type="text" class = "form-control" name = "address">
        <br><label>Số điện thoại</label>
        <input type="text" class = "form-control" name = "phone"
        <br><label>Thông tin bổ sung</label>
        <textarea name = "description" class = "form-control"></textarea>

        <br>
        <input type="submit" class = "btn btn-default" value = "Tạo hóa đơn">
        <?php } ?>

                
                   
    </div>
 </div>

@endsection

@section('sidebar')

        <div class="panel panel-primary">
            <div class="panel-heading">Danh sách khóa học</div>
           <div class="panel-body">
                <?php
                   $tuts = Tutorial::all();
                   foreach ($tuts as $t) {
                ?>
                <div class = "row">
                    <div class = "col-md-4 col-lg-4">
                        <img src="{{Asset('images/thumbs/'.$t->avatar)}}" with="100%">
                    </div>
                    <div class = "col-md-8 col-lg-8">
                       <a href=""> <h4>{{$t->title}}</h4></a>
                       <a href="" class ="btn btn-default">Xem thử</a>
                    <?php
                    if($t->locked){
                        echo "<a href='' class = 'btn btn-default'>Đăng kí</a>";
                    }
                    ?>
                    </div>
                    

                </div>
                <hr>
                 <?php
                   }
                   ?>
             </div>
         </div>
       
@endsection