@extends('layoutAdmin.layout')
@section('title', 'Retal List')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Retal List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Retal List</li>
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
        <h3 class="card-title">Retal List</h3>

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
                    <th>Contract details</th>
                    <th>TCar name</th>
                    <th>Pick-up date</th>
                    <th>Return date</th>
                    <th>Total</th>
                    <th>Service charge</th>
                    <th>Status</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                
                  @foreach ($data1 as $item)
                  <tr>
                    <td>
                        @php
                            echo $i+=1;
                        @endphp        
                    </td>
                    <td>{{$item['contract_id']}}</td>
                    <td>{{$item['car_name']}}</td>
                    <td>{{$item['pickup_date']}}</td>
                    <td>{{$item['return_date']}}</td>
                    <td>{{$item['contract_value']}}</td>
                    <td>{{$item['service_cost']}}</td>
                    <td>{{$item['status']}}</td>
                    


                   
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{url('admin/rentalcontract/xemchitiet/'.$item['contract_id'])}}">
                            <i class="fas fa-folder">
                            </i>
                            See details
                        </a>         
                    </td>
                </tr>
                                     
                @endforeach
            </tbody>
        </table>
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