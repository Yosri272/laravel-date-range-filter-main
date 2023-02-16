
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
     <div class="card-header"><strong> Add Tripe</strong> </div>
                    <div class="card-body">


<div class="row">
                <div class="col-lg-12">
                  <div class="card">





                  <div class="card-body">
                    <form method="GET"  action="{{ url('t_upm_view')}}/{{ $edit->id  }}">
                        @csrf
        <div class="form-group row">
            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('date_id') }}</label>


                                <input id="date_id" type="date" class="form-control @error('date_id') is-invalid @enderror" name="date_id" value="{{ $edit->date_id }}" required autocomplete="date_id" autofocus>

                                @error('date_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('captain_name') }}</label>


                                    <input id="captain_name" type="text" class="form-control @error('captain_name') is-invalid @enderror" name="captain_name" value="{{ $edit->captain_name }}" required autocomplete="captain_name" autofocus>

                                    @error('captain_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('phone_number') }}</label>


                                        <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $edit->phone_number }}" required autocomplete="phone_number" autofocus>

                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('t_id') }}</label>


                                            <input id="t_id" type="number" class="form-control @error('t_id') is-invalid @enderror" name="t_id" value="{{ $edit->t_id }}" required autocomplete="status" autofocus>

                                            @error('t_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('captain_action') }}</label>


                                                <input id="captain_action" type="text" class="form-control @error('captain_action') is-invalid @enderror" name="captain_action" value="{{ $edit->captain_action }}" required autocomplete="captain_action" autofocus>

                                                @error('captain_action')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('trip_status') }}</label>


                                                    <input id="trip_status" type="text" class="form-control @error('status') is-invalid @enderror" name="trip_status" value="{{ $edit->trip_status }}" required autocomplete="trip_status" autofocus>

                                                    @error('trip_status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('total_fare') }}</label>


                                    <input id="total_fare" type="number" class="form-control @error('total_fare') is-invalid @enderror" name="total_fare" value="{{ $edit->total_fare }}" required autocomplete="total_fare" autofocus>

                                    @error('total_fare')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('eta') }}</label>


                                        <input id="eta" type="number" class="form-control @error('eta') is-invalid @enderror" name="eta" value="{{ $edit->eta }}" required autocomplete="eta" autofocus>

                                        @error('eta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('pickup_to_dropoff_distance') }}</label>


                                <input id="pickup_to_dropoff_distance" type="text" class="form-control @error('pickup_to_dropoff_distance') is-invalid @enderror" name="pickup_to_dropoff_distance" value="{{ $edit->pickup_to_dropoff_distance }}" required autocomplete="pickup_to_dropoff_distance" autofocus>

                                @error('pickup_to_dropoff_distance')
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
