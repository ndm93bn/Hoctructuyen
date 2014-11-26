@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {{$tut->title}}<small> Quản lý khóa học</small>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý khóa học</h3>
                            </div>
                            <div class="panel-body">
                                <a href="{{Asset('admin/tutorial/manage/'.$tut->id.'/newpost')}}" class = "btn btn-default">Thêm bài học </a>
                                 
                                <hr>
                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-condensed text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">STT</th>
                                            <th class="text-center">Tiêu đề</th>
                                            <th class="text-center">Loại bài học</th>
                                            <th class="text-center">Lượt xem</th>
                                            <th class="text-center">Ngày tạo</th>
                                            <th class="text-center">Chỉnh sửa</th>
                                            <th class="text-center">Xuất bản</th> 
                                            <th class="text-center">Chặn</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                
                                <?php 
                                $stt = 0;
                                $posts = Post::where('tutorial_id', '=', $tut->id )->get();
                                foreach ($posts as $post) {
                                    $stt++;
                                    echo "<tr><td>".$stt."</td>";
                                    echo "<td>".$post->title."</td>";
                                    if($post->locked == true){
                                        echo "<td>Có phí</td>";
                                    }
                                    else{
                                        echo "<td>Miễn phí</td>";
                                    }

                                    echo "<td>".$post->view."</td>";
                                    echo "<td>".$post->created_at."</td>";
                                    echo "<td><a href='post/edit/$post->id' class = 'btn btn-default'>Chỉnh sửa</a></td>";
                                    echo "<td><a href='post/edit/' class = 'btn btn-default'>Xuất bản</a></td>";
                                    echo "<td><a href='' class = 'btn btn-default'>Xóa</a></td> </tr>";
                                }
                                ?>
                           
                            </tbody>
                            </table>
                            </div>    
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