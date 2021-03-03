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
                  <h3 class="card-title">Edit User</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('user.update',$user->id)}}" method="post" id="quickForm">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputName">User Name</label>
                      <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="exampleInputName" placeholder="Enter User Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" id="exampleInputName" placeholder="Enter Number Phone">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" id="exampleInputName" placeholder="Enter Email">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName">Role</label><br>
                        <select name="role" class="form-control" >

                             @foreach($roles as $role)
                                <option  value="{{ $role->id }}" {{ ($role->display_name == $user->role->display_name) ? 'selected' :''}}>{{ $role->name }}</option>
                            @endforeach
                        </select>

                        {{-- @foreach($roles as $role)
                            <input type="checkbox" name="role[]" id="exampleInputName" value="{{ $role->id }}" {{ $userOfRole->contains($role->id)  ? "checked" : "" }}>
                        <label>{{ $role->display_name }}</label><br>
                        @endforeach --}}
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
     </div>
  </div><!-- /.container-fluid -->
  @endsection


