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

                    ///

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







                  <div class="card-header">
                      <h5>
                      <i class="fa fa-align-justify"> <span class="badge  badge-warning">  عددالصحفين ={{ $s_journalist }}</span> </i>
                      <i class="fa fa-align-justify"> <span class="badge badge-success">عدد المصححين={{ $s_correctary }}</span> </i>
                      <i class="fa fa-align-justify"> <span class="badge badge-secondary">عدد سكرتيرالتحرير={{  $s_secrtary  }}</span> </i>
                  </div>
                  </h5>

                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>الاسم </th>
                            <th>البريد الالكترونى</th>
                            <th>تاريخ الاضافه</th>
                            <th>الصلاحيه</th>
                            <th>تحكم</th>
                          </tr>
                        </thead>
                        <tbody>

        <tr>
        @foreach($m_viewData as $data)
                            <td>{{$data->name}}</td>

                            <td>{{$data->email}}</td>

                            <td>{{$data->created_at}}</td>

                            @if($data->status =="المصحح")
                <td><span class="badge badge-success">المصحح</span></td>


                @elseif($data->status == "الصحفى")
                <td><span class="badge  badge-warning">الصحفى</span></td>


                @elseif($data->status =="سكرتير التحرير")
                <td><span class="badge badge-secondary">سكرتير التحرير</span></td>


                @elseif($data->status =="المدير")
                <td><span hidden>المدير</span></td>
                @endif



                @if($data->status =="المدير")
                <td><span hidden>المدير</span></td>
                @else

                            <td>

 <a class="btn btn-success" href="{{  url('discr_view')  }}/{{  $data->id  }}">
<i class="fa fa-search-plus"></i>
</a>

<a class="btn btn-info" href="{{  url('editm_view')  }}/{{  $data->id  }}">
<i class="fa fa-edit"></i>
</a>

<a class="btn btn-danger" href="{{  url('Delm_view')  }}/{{  $data->id  }}">
<i class="fa fa-trash-o"></i>
</a>



</td>
@endif
                          </tr>
                          @endforeach


                          </tbody>
                      </table>

                      </div>

                      {{  $m_viewData->links() }}
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
