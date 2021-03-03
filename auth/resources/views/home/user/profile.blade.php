@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')

 <!-- Main content -->

@section('content')
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3">
                  <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('Admin/dist/img/user4-128x128.jpg')}}"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center"></h3>

                  <p class="text-muted text-center"></p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-lg-9">
                  <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Profile</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="quickForm">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputName">User Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter User Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>



                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
        </div>

    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  @endsection


