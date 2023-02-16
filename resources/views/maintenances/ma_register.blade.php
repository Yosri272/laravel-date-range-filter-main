
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



<div class="card">
     <div class="card-header"><strong> Add maintenance</strong> </div>
                    <div class="card-body">


<div class="row">
                <div class="col-lg-12">
                  <div class="card">





                  <div class="card-body">
                  <form method="GET" action="{{  ('ma_register1')  }}">
                        @csrf
        <div class="form-group row">

            <div class="col-md-5">
                <label  for="text" class="col-md-4 col-form-label text-md-right">plate_number</label>

                   <select class="form-control" name="plate_number">
                    @foreach($motors as $data)
                      <option >{{$data->motor}}</option>
                      @endforeach
                    </select>

                </div>


                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Maintenance_date') }}</label>


                                    <input id="Maintenance_date" type="date" class="form-control @error('Maintenance_date') is-invalid @enderror" name="Maintenance_date" value="{{ old('Maintenance_date') }}" required autocomplete="Maintenance_date" autofocus>

                                    @error('Maintenance_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('maintenance_details') }}</label>


                                        <textarea id="maintenance_details" type="text" class="form-control @error('number_trips') is-invalid @enderror" name="maintenance_details" value="{{ old('maintenance_details') }}" required autocomplete="maintenance_details" autofocus></textarea>

                                        @error('maintenance_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('amount') }}</label>


                                        <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>




                        </div>



<br>
<br>
<hr>

<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('save') }}
                                </button>
                            </div>
                        </div>
</form>
   </div>

</div>













                  </div>


        </div>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- jQuery -->
<script src="javascript/showpassword.js"></script>
@endsection

</body>
</html>
