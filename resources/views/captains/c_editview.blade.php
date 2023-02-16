
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
     <div class="card-header"><strong> Add captains</strong> </div>
                    <div class="card-body">


<div class="row">
                <div class="col-lg-12">
                  <div class="card">





                  <div class="card-body">
                    <form method="GET"  action="{{ url('c_upm_view')}}/{{ $edit->id  }}">
                        @csrf
        <div class="form-group row">
            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $edit->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('account type') }}</label>


                                    <input id="account_type" type="text" class="form-control @error('account_type') is-invalid @enderror" name="account_type" value="{{ $edit->account_type }}" required autocomplete="account_type" autofocus>

                                    @error('account_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>


                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $edit->phone }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <label  for="email" class="col-md-4 col-form-label text-md-right">status</label>

                                   <select class="form-control"  value="{{ $edit->status }}" name="status">
                                      <option >active </option>
                                      <option >not active</option>


                                    </select>

                            </div>
                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pin code') }}</label>


                                        <input id="pin_code" type="number" class="form-control @error('pin_code') is-invalid @enderror" name="pin_code" value="{{ $edit->pin_code }}" required autocomplete="pin_code" autofocus>

                                        @error('pin_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('End date') }}</label>


                                            <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ $edit->end_date }}" required autocomplete="end_date" autofocus>

                                            @error('end_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                            <div class="col-md-5">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>


                                                    <input id="salary" type="number" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ $edit->Salary }}" required autocomplete="salary" autofocus>

                                                    @error('salary')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('bonce') }}</label>


                                                        <input id="bonce" type="number" class="form-control @error('bonce') is-invalid @enderror" name="bonce" value="{{ $edit->bonce }}" required autocomplete="bonce" autofocus>

                                                        @error('bonce')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>


                                                    <div class="col-md-5">
                                                        <label  for="text" class="col-md-4 col-form-label text-md-right">Plate Number of Motor</label>

                                                           <select class="form-control" value="{{ $edit->motor }}" name="motor">
                                                            @foreach($motors as $data)
                                                              <option >{{$data->motor}}</option>
                                                              @endforeach
                                                            </select>

                                                        </div>
    <div class="col-md-6">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('License Num') }}</label>


            <input id="license_num" type="number" class="form-control @error('license_num') is-invalid @enderror" name="license_num" value="{{ $edit->license_number }}" required autocomplete="license_num" autofocus>

            @error('license_num')
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
