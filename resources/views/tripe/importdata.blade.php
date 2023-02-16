@extends ('layout.master1')

@section('content3')
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


                        <div class="card-body">
                <form action="{{ route('import') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file"
                           class="form-control">
                    <br>
                    <button class="btn btn-success">
                          Import User Data
                       </button>

                </form>
            </div>



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
