@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')

 <!-- Main content -->

@section('content')
  <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Thêm Mới Người Dùng </a></h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height:  auto">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên Đăng Nhập</th>
                    <th>Hình Ảnh</th>
                    <th>Chức Vụ</th>
                    <th>Hành Động</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $key=>$user)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name}}</td>
                    <td><img src="{{ $user->images }}" alt="" width="100px" height="100px"></td>
                    <td>{{ $user->role->display_name }}</td>
                    {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                    <td>
                        <a href="{{ $user->id }}"  data-toggle="modal" data-target="#exampleModalCenter{{$user->id}}">
                            <i class="fas fa-eye"></i>
                        </a>
                        ||
                        <a href="{{ route('user.edit',$user->id) }}"><i class="fas fa-user-edit"></i></a>
                        || <a href="{{ route('user.delete',$user->id) }}" ><i class="fas fa-trash-alt"></i></a></td>
                         <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-blue">
                            <h5 class="modal-title " id="exampleModalLongTitle">Chi Tiết</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <div class="modal-body">

                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="quickForm">

                    <div class="form-group">
                      <label for="exampleInputName">User Name : <span>{{ $user->name }}</span></label>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email : <span>{{ $user->email }}</label>
                      </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password : <span>{{ $user->phone }}</label>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Password : <span>{{ $user->role->display_name }}</label>
                      </div>
                  <!-- /.card-body -->

                </form>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- Button trigger modal -->


  </div><!-- /.container-fluid -->
  @endsection


