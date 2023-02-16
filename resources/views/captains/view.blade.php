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
                        <form action="{{  ('c_search')  }}" method="GET" class="form-inline guide-advanced-search" novalidate="">
                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                            <div class="form-group mr-">
                                <label>
                                    <i class="fa fa-cogs ml-1"></i>
                                    <span>advanced search:-</span>

                                </label>

                            </div>





                                 <div class="form-group">
                                  <label>captains</label>
                                  <input class="form-control" type="text" name="captains"/>
                                 </div>

                                <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span>Search</span>
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </form>
    </div>

    <a href="{{  url('c_getpdf')  }}" class="btn btn-primary">print report</a>







                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>account_type</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>status</th>
                            <th>pin_code</th>
                            <th>motor</th>
                            <th>license_number</th>
                            <th>Join date</th>
                            <th>end_date</th>
                            <th>Salary</th>
                            <th>bonce</th>
                            <th>control</th>
                          </tr>
                        </thead>
                        <tbody>

        <tr>
        @foreach($Captains as $data)
                            <td>{{$data->id}}</td>
                            <td>{{$data->account_type}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->pin_code}}</td>
                            <td>{{$data->motor}}</td>
                            <td>{{$data->license_number}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->end_date}}</td>
                            <td>{{$data->Salary}}</td>
                            <td>{{$data->bonce}}</td>



                            <td>


<a class="btn btn-info" href="{{  url('c_editm_view')  }}/{{  $data->id  }}">
<i class="fa fa-edit"></i>
</a>

<a class="btn btn-danger" href="{{  url('c_distory')  }}/{{  $data->id  }}">
<i class="fa fa-trash-o"></i>
</a>



</td>

                          </tr>
                          @endforeach


                          </tbody>
                      </table>

                      </div>

                      {{  $Captains->links() }}
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
