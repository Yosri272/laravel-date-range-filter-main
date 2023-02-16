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
                        <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                            <div class="form-group mr-">
                                <label>
                                    <i class="fa fa-cogs ml-1"></i>
                                    <span>advanced search:-</span>

                                </label>

                            </div>

                                   <div class="form-group mr-2">
                                <label class="mr-2" for="class">name </label>
                                <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                    <option value="all" selected="" data-select2-id="2">الكل</option>
                                    <option value="1">الفرع  1</option>
                                    <option value="11">الفرع  2</option>
                                </select>
                            </div>



                                 <div class="form-group">
                                  <label> From date</label>
                                  <input class="form-control" type="date"/>
                                 </div>
                                <div class="form-group">
                                 <label> To date</label>
                                 <input class="form-control" type="date"/>
                                </div>
                                <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span>Search</span>
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </form>
    </div>









                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                              <th>name </th>
                              <th>E-mail</th>
                              <th>Added date</th>
                              <th>control</th>
                            </tr>
                          </thead>
                          <tbody>

          <tr>
          @foreach($a_viewData as $data)

                              <td><span class="badge badge-secondary">{{$data->name}}</span></td>
                              <td><span class="badge badge-secondary">{{$data->email}}</span></td>

                              <td><span class="badge badge-secondary">{{$data->created_at}}</span></td>







                              <td>



                              <span class="badge  badge-warning">
                                No Access

                                 </span>

                         </td>

                            </tr>
                            @endforeach


                          </tbody>
                      </table>

                      </div>

                      {{  $a_viewData->links() }}
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
