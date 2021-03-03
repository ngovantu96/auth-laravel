@extends('home.master')
@section('page-title','Danh Vé Xe')

 <!-- Main content -->

@section('content')
  <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> <a href="{{ route('ticker.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Thêm Mới Vé Xe </a></h3>

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
                    <th>STT</th>
                    <th>Tuyến Đường</th>
                    <th>Loại Xe</th>
                    <th>Quãng Đường</th>
                    <th>Giá Vé</th>
                    <th>Giờ Chạy</th>
                    <th>Hành Động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                    <td>
                        <a href="" >
                            <i class="fas fa-eye"></i>
                        </a>
                        ||
                        <a href=""><i class="fas fa-user-edit"></i></a>
                        || <a href="" ><i class="fas fa-trash-alt"></i></a></td>
                         <!-- Modal -->

                  </tr>
                  {{-- @endforeach --}}
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


