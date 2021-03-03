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
              <h3 class="card-title">Permission Table</h3>

              <div class="card-tools">
                <a href="{{ route('permission.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i>  Create New Permission</a>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height:  auto">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Hành Động</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($permissions as $key=>$permission)
                  <tr>
                    <td>{{ ++$key}}</td>
                    <td>{{ $permission->name}}</td>
                    <td>{{ $permission->display_name}}</td>
                    <td>
                        <a href="{{ route('permission.edit',$permission->id)}}" ><i class="fas fa-edit"></i></a>
                        || <a href="{{ route('permission.delete',$permission->id)}}"><i class="fas fa-trash-alt"></i></a></td>
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


