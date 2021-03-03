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
                  <h3 class="card-title">Create Role</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('role.store')}}" method="post" id="quickForm">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputName">Role Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Role Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Role Display Name</label>
                        <input type="text" name="display_name" class="form-control" id="exampleInputName" placeholder="Enter Role Display Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Permission</label><br>
                        @foreach($permissions as $permission)
                        <input type="checkbox" name="permission[]" id="exampleInputName" value="{{ $permission->id }}">
                        <label for="vehicle1">{{ $permission->display_name }}</label><br>
                        @endforeach
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
         </div>
     </div>
  </div><!-- /.container-fluid -->
  @endsection


