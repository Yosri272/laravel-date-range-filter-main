
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
     <div class="card-header"><strong> Add Motors</strong> </div>
                    <div class="card-body">


<div class="row">
                <div class="col-lg-12">
                  <div class="card">





                  <div class="card-body">
                  <form method="GET" action="{{  ('m_register1')  }}">
                        @csrf
        <div class="form-group row">
            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Plate Number') }}</label>


                                <input id="motors" type="text" class="form-control @error('motors') is-invalid @enderror" name="motors" value="{{ old('motors') }}" required autocomplete="motors" autofocus>

                                @error('motors')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Engine serial number') }}</label>


                                    <input id="plate_Num" type="number" class="form-control @error('plate_Num') is-invalid @enderror" name="plate_Num" value="{{ old('plate_Num') }}" required autocomplete="plate_Num" autofocus>

                                    @error('plate_Num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Shashi number') }}</label>


                                        <input id="status" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>


                                        <input id="license_Num" type="number" class="form-control @error('license_Num') is-invalid @enderror" name="license_Num" value="{{ old('license_Num') }}" required autocomplete="license_Num" autofocus>

                                        @error('license_Num')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-5">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('production date') }}</label>


                                            <input id="license_date" type="date" class="form-control @error('license_date') is-invalid @enderror" name="license_date" value="{{ old('license_date') }}" required autocomplete="license_date" autofocus>

                                            @error('license_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' the color') }}</label>


                                                <input id="counter" type="text" class="form-control @error('counter') is-invalid @enderror" name="counter" value="{{ old('counter') }}" required autocomplete="counter" autofocus>

                                                @error('counter')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                    <div class="col-md-5">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Buy date') }}</label>


                                            <input id="maintenance_date" type="date" class="form-control @error('maintenance_date') is-invalid @enderror" name="maintenance_date" value="{{ old('maintenance_date') }}" required autocomplete="maintenance_date" autofocus>

                                            @error('maintenance_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Counter Number') }}</label>


                                                <input id="counter_number" type="number" class="form-control @error('counter_number') is-invalid @enderror" name="counter_number" value="{{  old('counter_number') }}" required autocomplete="counter_number" autofocus>

                                                @error('counter_number')
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
