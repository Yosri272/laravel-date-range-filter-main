
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
                    <form method="GET"  action="{{ url('co_upm_view')}}/{{ $edit->id  }}">
                        @csrf
        <div class="form-group row">
            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Captain Name') }}</label>


                                <input id="captain_name" type="text" class="form-control @error('item') is-invalid @enderror" name="captain_name" value="{{ $edit->captain_name }}" required autocomplete="captain_name" autofocus>

                                @error('captain_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Number of trips') }}</label>


                                    <input id="number_trips" type="number" class="form-control @error('number_trips') is-invalid @enderror" name="number_trips" value="{{ $edit->number_trips }}" required autocomplete="number_trips" autofocus>

                                    @error('number_trips')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Rate') }}</label>


                                        <input id="Rate" type="number" class="form-control @error('amount_commission') is-invalid @enderror" name="Rate" value="{{ old('Rate') }}" required autocomplete="Rate" autofocus>
                                        <div class="form-text text-muted">
                                            Insert Amount Commission Fixed Amount (Ex: 8 for 8%)
                                          </div>
                                        @error('Rate')
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

@endsection

</body>
</html>
