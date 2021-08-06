@extends('layoutAdmin.layout')
@section('title', 'Home MFG')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Brand Car</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Brand Car</li>
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
                <h3 class="card-title">Brand Car</h3>

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
                            <th>Car Id</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>Origin</th>
                            <th>Wedsite</th>
                            <th></th>

                        </tr>
                    </thead>
                    <?php
                    $count = 1;
                    ?>
                    <tbody>

                        @foreach ($mfg as $items)
                            <tr id="{{ $items->mfg_id }}">
                                <td></td>
                                <td>{{ $items->mfg_id }}</td>
                                <td>{{ $items->name }}</td>
                                <td><img width="100px" src="{{ url('/img/logo/	' . $items->logo) }}" /></td>
                                {{-- <td>{{ $items->logo }}</td> --}}
                                <td>{{ $items->nation }}</td>
                                <td>{{ $items->website }}</td>

                                <td>{{ $items->created_at }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ url('admin/mfg/update/' . $items->mfg_id) }}" method="post">
                                        <i class="fas fa-folder">
                                        </i>
                                       Update
                                    </a>

                                    <a class="btn btn-danger btn-sm" href="{{ url('admin/mfg/delete/' . $items->mfg_id) }}"
                                        onclick="javascript:return confirm('Are you sure ?')">
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
                    {{ $mfg->links('Admin-Rental.layoutpaginationlinks') }}
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->

    </section>
    <!-- /.content -->



    @if (session('status'))
        <script>
        let status = {!! json_encode(session('status'), JSON_HEX_TAG) !!};
            alert(status)
        </script>
    @endif








@endsection

@section('script-section')
    <script>
        $(function() {
            $('#product').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
