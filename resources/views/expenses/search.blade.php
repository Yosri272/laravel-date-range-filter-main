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
                        <form action="{{  ('e_search')  }}" method="GET" class="form-inline guide-advanced-search" novalidate="">
                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                            <div class="form-group mr-">
                                <label>
                                    <i class="fa fa-cogs ml-1"></i>
                                    <span>advanced search:-</span>

                                </label>

                            </div>





                                 <div class="form-group">
                                  <label> name expenses </label>
                                  <input class="form-control" type="text" name="expenses"/>
                                 </div>
                                 <div class="form-group">
                                    <label>  date </label>
                                    <input class="form-control" type="date" name="for"/>
                                   </div>
                                   <div class="form-group">
                                    <label>  date </label>
                                    <input class="form-control" type="date" name="to"/>
                                   </div>
                                <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span>Search</span>
                                <i class="fa fa-search"></i>
                            </button>
                            </div>

    </div>





    <a href="{{  url('e_getpdf')  }}" class="btn btn-primary">print report</a>


</form>

                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>id </th>
                            <th>item </th>
                            <th>price</th>
                            <th>narration</th>
                            <th>date</th>
                            <th>control</th>
                          </tr>
                        </thead>
                        <tbody>

        <tr>
        @foreach($Expenses as $data)
                            <td>{{$data->id}}</td>
                            <td>{{$data->item}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->narration}}</td>
                            <td>{{$data->date}}</td>


                            <td>



<a class="btn btn-info" href="{{  url('e_editm_view')  }}/{{  $data->id  }}">
<i class="fa fa-edit"></i>
</a>

<a class="btn btn-danger" href="{{  url('e_distory')  }}/{{  $data->id  }}">
<i class="fa fa-trash-o"></i>
</a>



</td>

                          </tr>
                          @endforeach


                          </tbody>
                      </table>

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
