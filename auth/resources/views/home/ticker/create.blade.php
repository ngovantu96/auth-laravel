@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')

 <!-- Main content -->

@section('content')
  <div class="container-fluid">
      <!-- /.row -->
     <div class="row">
         <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Vé Xe</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('ticker.store')}}" method="post" id="quickForm">
                    @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                            <label for="exampleInputName">Điểm Xuất Phát</label><br>
                            <select name="startting-point" class="form-control" >
                             <option  value="0">Huế</option>
                             <option  value="0">Đà Nẵng</option>
                             <option  value="0">Nha Trang</option>
                             <option  value="0">TPHCM</option>
                             <option  value="0">Đà Lạt</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                            <label for="exampleInputName">Điểm Đến</label><br>
                            <select name="destination" class="form-control" >
                             <option  value="0">Huế</option>
                             <option  value="0">Đà Nẵng</option>
                             <option  value="0">Nha Trang</option>
                             <option  value="0">TPHCM</option>
                             <option  value="0">Đà Lạt</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                            <label for="exampleInputDate">Ngày Đi</label><br>
                            <input type="date" id="exampleInputDate" name="date">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                            <label for="exampleInputName">Giờ Chạy</label><br>
                            <select name="role">
                                <option  value="">4 : 00 h</option>
                                <option  value="">8 : 00h</option>
                                <option  value="">12 : 00 h</option>
                                <option  value="">14 : 00 h</option>
                                <option  value="">15 : 00h</option>
                                <option  value="">17 :00 h</option>
                                <option  value="">19 :00 h</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputName">Giá Vé</label>
                                <input type="number" name="name" class="form-control" id="exampleInputName" placeholder="Enter User Name">
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="exampleInputName">Số Lượng Giường</label>
                                <input type="number" name="phone" class="form-control" id="exampleInputName" placeholder="Enter Number Phone">
                              </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="exampleInputName">Mã Xe</label>
                                <input type="number" name="phone" class="form-control" id="exampleInputName" placeholder="Enter Number Phone">
                              </div>
                        </div>
                    </div>


                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                  </div>
                </form>
              </div>
            </div>
         </div>
     </div>
  </div><!-- /.container-fluid -->
  @endsection


