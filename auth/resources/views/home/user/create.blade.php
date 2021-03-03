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
                  <h3 class="card-title">Create User</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('user.store')}}" method="post" id="quickForm">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputName">User Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter User Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputName" placeholder="Enter Number Phone">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputName" placeholder="Enter Email">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputName" placeholder="Enter Password">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName">Role</label><br>
                        <select name="role" class="form-control" >
                            @foreach($roles as $role)
                                <option  value="{{ $role->id }}">{{ $role->display_name }}</option>
                            @endforeach
                        </select>
                        {{-- @foreach($roles as $role)
                        <input type="checkbox" name="role[]" id="exampleInputName" value="{{ $role->id }}">
                        <label for="vehicle1">{{ $role->name }}</label><br> --}}
                        {{-- @endforeach --}}
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


  <!-- de day sau ni tim -->
{{--
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">General</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body" style="display: block;">
      <div class="form-group">
        <label for="inputName">Project Name</label>
        <input type="text" id="inputName" class="form-control">
      </div>
      <div class="form-group">
        <label for="inputDescription">Project Description</label>
        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="inputStatus">Status</label>
        <select class="form-control custom-select">
          <option selected="" disabled="">Select one</option>
          <option>On Hold</option>
          <option>Canceled</option>
          <option>Success</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputClientCompany">Client Company</label>
        <input type="text" id="inputClientCompany" class="form-control">
      </div>
      <div class="form-group">
        <label for="inputProjectLeader">Project Leader</label>
        <input type="text" id="inputProjectLeader" class="form-control">
      </div>
    </div>
    <!-- /.card-body -->
  </div> --}}
  @endsection


