<!-- Lưu tại resources/views/user/index.blade.php -->
@extends('layoutAdmin.layout')
@section('title', 'Danh sách người dùng')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Account</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Data table</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">License require approval</h3>
  
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects" style="text-align: center">
              <thead>
                  <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Birthday</th>
                      <th>Driver's license</th>
                      <th>Approval Driver's license</th>
                      <th>Join date</th>
                      <th>Status</th>
                      <th>Action</th>
                     
                  </tr>
              </thead>
              <?php
              $count = 1;
              ?>
                <tbody>
                    @foreach($ds as $user)
                    <tr>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->driver_id ? "Có" : "Chưa đăng ký"}}</td>
                        <td>{{$user->driver_id_image_approval ? "Đã duyệt" : "Chưa duyệt"}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->status ? "Khóa" : "Hoạt động"}}</td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ url('admin/update/'.$user->user_id) }}" >
                                <i class="fas fa-pencil-alt"> Detail</i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ url('admin/delete/'.$user->user_id) }}" onclick="javascript:return confirm('Are you sure ?')">
                                <i class="fas fa-trash"> Delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
          </table>
        </div>
    </div>


</section>
@endsection

@section('script-section')
    <script>
        $(function(){
            $('#product').DataTable({
                "paging":true,
                "lengthChange":false,
                "searching":false,
                "ordering":true,
                "info":true,
                "autoWidth":false,
            });
        });
    </script>
@endsection