@extends('main.main')
@section('content')
<?php
$tut = Tutorial::find($post->tutorial_id);
$user = User::find($tut->user_id);
?>
<br>
<div> <span class= "glyphicon glyphicon-arrow-left" ></span>
<a href = "{{Asset('khoa-hoc/'.$tut->id.'-'.$tut->alias)}}">{{$tut->title}}</a></div>
<div class = "page-title"><h3 ><b>{{$post->title}}</b></h3></div>
<div class = "page-info text-right">
	<span class = "glyphicon glyphicon-user"></span>  {{$user->fullname}} | <span class = "glyphicon glyphicon-time"></span> {{$post->created_at}}
	| <span class = "glyphicon glyphicon-eye-open"></span> {{$post->view}}<br><br>
</div>
<div class = "description">
<b>{{$post->description}}</b>
</div>
<hr>
<div class="panel panel-default">
     <div class="panel-heading">
       <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Nội dung bài học</h3>
    </div>
    <div class="panel-body">
        {{$post->content}}
                              
    </div>
</div>
@endsection

@section('siderbar')

@endsection