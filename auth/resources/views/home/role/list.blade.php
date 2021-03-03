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
              <h3 class="card-title">Role Table</h3>

              <div class="card-tools">
                <a href="{{ route('role.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i>  Create New Role</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height:  auto">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Tên Hiển Thị</th>
                    <th>Chức Năng</th>
                    <th>Hành Động</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($roles as $key=>$role)
                  <tr>
                    <td>{{ ++$key}}</td>
                    <td>{{ $role->name}}</td>
                    <td>{{ $role->display_name }}</td>
                     <td>

                            @foreach($role->permissions as $permission)

                                 <p class="badge badge-warning">{{ $permission->display_name }}</p>
                            @endforeach

                    </td>
                    <td>
                        <a href="{{ route('role.edit',$role->id)}}" ><i class="fas fa-edit"></i></a>
                        || <a href="{{ route('role.delete',$role->id)}}"><i class="fas fa-trash-alt"></i></a></td>
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

  </div><!-- /.container-fluid -->

  @endsection


