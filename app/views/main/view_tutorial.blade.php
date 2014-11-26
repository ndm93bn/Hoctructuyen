@extends('main.main')
@section('content')
<div class = "page-title"><h3 ><b>{{$tut->title}}</b></h3></div>
<div class = "page-info text-right">
    <span class = "glyphicon glyphicon-user"></span>  {{User::find($tut->user_id)->fullname}} | <span class = "glyphicon glyphicon-time"></span> {{$tut->created_at}}
    | <span class = "glyphicon glyphicon-eye-open"></span> {{$tut->view}}<br><br>
</div>
<center><img src = "{{Asset('images/'.$tut->avatar)}}" with = "100%"></center>
<div class = "description">
    {{$tut->description}}
</div>

<hr>
<div class="panel panel-default">
     <div class="panel-heading">
       <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Danh sách bài học</h3>
    </div>
    <div class="panel-body">
        <?php
        $posts = Post::where('tutorial_id', '=', $tut->id)->get();
        foreach ($posts as $post) {
        ?>
            <a href="{{Asset('bai-hoc/'.$post->id.'-'.$post->alias)}}"><h4>{{$post->title}}</h4></a>
            <i>{{$post->description}}</i>
            <br><br>
            <a href="{{Asset('bai-hoc/'.$post->id.'-'.$post->alias)}}" class = "btn btn-default">Xem thêm</a>

            <hr>
        <?php
        }
        ?>
                              
    </div>
</div>
@endsection

@section('sidebar')
<?php
    if(!Session::has('user_login') || $tut->locked == false){
     ?>
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
     <?php
    }
    else
    {
    ?>
    <div class="panel panel-warning">
            <div class="panel-heading">Tham gia khóa học</div>
           <div class="panel-body">
    <div class="text-center">
    <span style="color:red; font-style:italic">Tham gia khóa học</span>
    <br> 
    <span style="color:green ; font-style:bold; font-size: 20px">{{$tut->title}} </span>
    <br>chỉ với:
    <br>
    <span style="color:red; font-style:bold; font-size: 30px">{{$tut->cost}} đ</span>
    <br>
    <center><a href = "{{Asset('hoa-don/dang-ki/'.$tut->id.'-'.$tut->alias)}}" class = "btn btn-success">Đăng kí khóa học</a></center>
   </div>
     </div>
 </div>

 <div class="panel panel-primary">
            <div class="panel-heading">Khóa học khác</div>
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
     <?php
    }
    ?>
       
@endsection