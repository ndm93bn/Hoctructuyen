@extends('admin.main')

@section('page-wrapper')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {{$tut->title}} <small>Chỉnh sửa khóa học</small>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Chỉnh sửa thông tin khóa học</h3>
                            </div>
                            <div class="panel-body">
                                     <script type="text/javascript">
                                     function tinhphi1(form,callingField){

                                    if(!form.tinhphi.checked){
                                         document.getElementById("tinhphi-form").innerHTML="";
                                          document.getElementById("nguon-thongbao").innerHTML="<i>Khóa học tính phí</i>";

                                    
                                    }
                                    else{
                                        var $str = "<br><label>Thời lượng khóa học</label><input type='text' name='length' class = 'form-control' value = '{{$tut->length}}' placeholder='Số ngày khóa học'>"
                                        +          "<br><label>Chi phí khóa học</label><input type='text' name='cost' class = 'form-control' value ='{{$tut->cost}}' placeholder = 'Theo đơn vị VND'>"

                                         document.getElementById("tinhphi-thongbao").innerHTML="<i>Khóa học tính phí</i>";
                                        document.getElementById("tinhphi-form").innerHTML=$str;
                                    }
                                    }
                                    </script>
                                <form method = "post" action="" enctype="multipart/form-data">
                                    <label>Tiêu đề khóa học</label>
                                    <input type="text" name = "title" id= "title" class = "form-control" value="{{$tut->title}}"><br>
                                    <label>Ảnh minh họa</label><br>
                                    <img src="{{Asset('images/thumbs/'.$tut->avatar)}}">
                                    <input type="file" name = "avatar" id = "avatar" class = "form-control"><br>
                                    <label>Mô tả khóa học</label>
                                    <textarea name="description" class="form-control ckeditor" id="ckeditor">{{$tut->description}}</textarea>
                                    <br>
                                    <?php
                                    if($tut->locked){
                                        ?>
                                        <input type="checkbox" name="tinhphi" id="tinhphi" onClick="tinhphi1(this.form,this.name);" checked>
                                    <span id="tinhphi-thongbao"><i>Khóa học tính phí</i><br></span>
    
                                    <div id="tinhphi-form">
                                        <br><label>Thời lượng khóa học</label><input type='text' name='length' class = 'form-control' value ="{{$tut->length}}" placeholder='Số ngày khóa học'>
                                        <br><label>Chi phí khóa học</label><input type='text' name='cost' class = 'form-control' value ="{{$tut->cost}}" placeholder = 'Theo đơn vị VND'>
                                
                                    </div>

                                        <?php
                                    }
                                    else{
                                        ?>
                                        <input type="checkbox" name="tinhphi" id="tinhphi"  onClick="tinhphi1(this.form,this.name);">
                                    <span id="tinhphi-thongbao"><i>Khóa học tính phí</i><br></span>
    
                                    <div id="tinhphi-form">
                                
                                    </div>
                                        <?php
                                    }
                                    ?>
                                    <br>
                                    <input type="submit" value="Chỉnh sửa khóa học" class = "btn btn-default">

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