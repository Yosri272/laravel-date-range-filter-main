@extends ('layout.master1')

@section('content3')
@section('content')
@section('content1')


</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 406px;">
    <!-- Content Header (Page header) -->



    <br>







    <div class="content-header">

        <div class="container-fluid">


                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">



                                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3> {{  $d_data1 }}</h3>

                                <p>Captain</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ url('captains') }}" class="small-box-footer">Browse <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->




                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                          <h3> {{  $d_data }}</h3>

                                <p>Motors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ url('motor') }}" class="small-box-footer">Browse  <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->



                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3> {{  $d_data2 }}</h3>

                                <p>Tripe</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ url('tripe') }}" class="small-box-footer">Browse  <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <!-- ./col -->


                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{  $d_data3 }}</h3>

                                <p>View User</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ url('v_admin') }}" class="small-box-footer">Browse  <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>





                            <!-- ./col -->
            </div>
            <!-- /.row -->


            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Expenses</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body p-0" style="display: block;">
                    <div class="table-responsive">
                    <table class="table m-0">
                            <thead>
                            <tr>
                                <tr>
                                    <th>id </th>
                                    <th>item </th>
                                    <th>price</th>
                                    <th>narration</th>
                                    <th>date</th>
                                    <th>control</th>
                                  </tr>
                            </tr>
                            </thead>
                            <tr>
                                @foreach($Expenses as $data)
                                                    <td>{{$data->id}}</td>
                                                    <td>{{$data->item}}</td>
                                                    <td>{{$data->price}}</td>
                                                    <td>{{$data->narration}}</td>
                                                    <td>{{$data->date}}</td>


                                                    <td>


                                                        <span class="badge  badge-warning">
                                                           No Access

                                                           </span>



                        </td>

                                                  </tr>
                                                  @endforeach
                            <tbody>


                        </table>

                      </div>

                      {{  $Expenses->links() }}
                      </div>

                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix" style="display: block;">


                </div>
                <!-- /.card-footer -->
            </div>


            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
        @endsection

