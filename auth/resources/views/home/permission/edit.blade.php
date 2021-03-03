@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')

 <!-- Main content -->

@section('content')
  <div class="container-fluid">
      <!-- /.row -->
     <div class="row">
         <div class="col-lg-9">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Permission</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('permission.update',$permission->id)}}" method="post" id="quickForm">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputName">Permission Name</label>
                      <input type="text" name="name" value="{{ $permission->name }}" class="form-control" id="exampleInputName" placeholder="Enter Permission Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Permission Display Name</label>
                        <input type="text" name="display_name" value="{{ $permission->display_name }}" class="form-control" id="exampleInputName" >
                      </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">update</button>
                  </div>
                </form>
              </div>
            </div>
         </div>
     </div>
  </div><!-- /.container-fluid -->
  @endsection


