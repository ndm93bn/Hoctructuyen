@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {{$tut->title}} <small>Thêm mới bài học</small>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Hoàn thành thông tin bài học</h3>
                            </div>
                            <div class="panel-body">
                                    
                                <form method = "post" action="">
                                    <label>Tiêu đề bài học</label>
                                    <input type="text" name = "title" id= "title" class = "form-control"><br>
                                    <label>Mô tả bài học học</label>
                                    <textarea name="description" class="form-control"></textarea>
                                     <br><label>Nội dung bài học</label>
                                    <textarea name="content" id = 'ckeditor' rows = 7 class="form-control ckeditor"></textarea>
                                    <?php
                                    if($tut->locked){
                                        echo "<br><input type='checkbox' name='free'> <i>Cho phép xem thử</i>";
                                    }
                                    ?>
                                    <br><label>Bài học trước</label>
                                    <select name="parent" class = "form-control">
                                        <?php 
                                        $list_post = Post::where('tutorial_id', '=', $tut->id);
                                        if($list_post->count() >0){
                                            $list_post = $list_post->get();
                                            foreach ($list_post as $post ) {
                                                echo "<option value = '$post->id'>$post->title</option>";
                                            }
                                        }
                                        else{
                                            echo "<option value = '0'>Đây là bài học đầu tiên</option>";
                                        }

                                        ?>
                                    </select><br>
                                    
                                    <input type="submit" value="Tạo bài học mới" class = "btn btn-default">

                                </form>
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