@extends ('layout.master1')

@section('content')
@section('content1')
</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">

            <div class="card-body">




<div class="row">

                <div class="col-lg-12">
                  <div class="card">


                    <div class="card-extra clearfix pt-2 pb-3 mb-3">
                        <form action="{{  ('t_search')  }}" method="GET" class="form-inline guide-advanced-search" novalidate="">
                            <div class="form-group mr-">
                                <label>
                                    <i class="fa fa-cogs ml-1"></i>
                                    <span>search:-</span>

                                </label>

                            </div>

                                   <div class="form-group mr-2">
                                <label class="mr-2" for="class">captain </label>

                                <input class="form-control" name="captain_name" type="text"/>
                            </div>



                                 
                                <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span>Search</span>
                                <i class="fa fa-search"></i>
                            </button>
                            </div>

                        </div>

                        <a href="{{  url('t_getpdf')  }}" class="btn btn-primary">print report</a>









                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>id </th>
                            <th>date_id </th>
                            <th>captain_id </th>
                            <th>captain_name</th>
                            <th>phone_number</th>
                            <th>t_id</th>
                            <th> captain_action</th>
                            <th> trip_status</th>
                            <th>total_fare, </th>
                            <th>eta</th>
                            <th>pickup_to_dropoff_distance</th>
                            <th>control</th>
                          </tr>
                        </thead>
                        <tbody>
      @foreach($Tripe as $data)
        <tr>

                            <td>{{$data->id}}</td>
                            <td>{{$data->date_id}}</td>
                            <td>{{$data->captain_id}}</td>
                            <td>{{$data->captain_name}}</td>
                            <td>{{$data->phone_number}}</td>
                            <td>{{$data->t_id}}</td>
                            <td>{{$data->captain_action}}</td>
                            <td>{{$data->trip_status}}</td>
                            <td>{{$data->total_fare}}</td>
                            <td>{{$data->eta}}</td>
                            <td>{{$data->pickup_to_dropoff_distance}}</td>



                            <td>



<a class="btn btn-info" href="{{  url('t_editm_view')  }}/{{  $data->id  }}">
<i class="fa fa-edit"></i>
</a>

<a class="btn btn-danger" href="{{  url('t_distory')  }}/{{  $data->id  }}">
<i class="fa fa-trash-o"></i>
</a>



</td>

                          </tr>
                          @endforeach


                          </tbody>

                      </table>
                      {{  $Tripe->links() }}
                    </form>

                      </div>

                      </div>


                </div>
                <!-- /.col-->
              </div>

            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
</body>
</html>
