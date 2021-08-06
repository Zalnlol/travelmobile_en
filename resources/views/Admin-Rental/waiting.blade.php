@extends('layoutAdmin.layout')
@section('title', 'Danh sách xe đang hoạt động')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Waiting Approval Car List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Waiting Approval Car</li>
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
        <h3 class="card-title">Waiting Approval Car</h3>

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
                    <th style="width: 1%">#</th>
                    <th>Status</th>
                    <th>Plate id</th>
                    <th>Brand car</th>
                    <th>Model car</th>
                    <th>Join date</th>
                    <th></th>
                </tr>
            </thead>
            <?php
            $count = 1;
            ?>
            <tbody>
                <tr>
                  @foreach ($rental as $item)

                  <td>{{ $item->car_id }}</td>
                    <td>

                      @if ($item->status == 1)
                      <span class="badge badge-success">Waiting Approval</span>
                      @endif

                    </td>
                    <td>{{ $item->plate_id }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.rental.view', $item->car_id) }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.rental.image', $item->car_id) }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Image car
                      </a>
                        <a class="btn btn-danger btn-sm" href="{{ route('admin.rental.delete', $item->car_id) }}" onclick="javascript:return confirm('Are you sure ?')">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                                     
                @endforeach
            </tbody>
        </table>
        <div class="pagination-block" style="float: right; padding-right: 24px">
          {{ $rental->links('Admin-Rental.layoutpaginationlinks') }}
        </div>
      </div>
      <!-- /.card-body -->
    <!-- /.card -->

  </section>
  <!-- /.content -->
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