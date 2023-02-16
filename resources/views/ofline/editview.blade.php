
@extends ('layout.ofline')

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
     <div class="card-header"><strong> Edit Order</strong> </div>
                    <div class="card-body">


<div class="row">
                <div class="col-lg-12">
                  <div class="card">





                  <div class="card-body">
                  <form method="GET" action="{{ url('of_upm_view')}}/{{ $edit->id  }}">
                        @csrf
        <div class="form-group row">
            <div class="col-md-5">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Order date') }}</label>


                                <input id="order_date" type="date" class="form-control @error('order_date') is-invalid @enderror" name="order_date" value="{{ $edit->order_date }}" required autocomplete="order_date" autofocus>

                                @error('order_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label  for="email" class="col-md-4 col-form-label text-md-right">status</label>

                                   <select class="form-control" name="status">
                                      <option>New </option>
                                      <option>Deleverd</option>
                                      <option>Reject</option>


                                    </select>

                            </div>










                                <div class="col-md-5">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Customer Name') }}</label>


                                        <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ $edit->customer_name }}" required autocomplete="customer_name" autofocus>

                                        @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-5">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Customer Location') }}</label>


                                            <input id="customer_location" type="text" class="form-control @error('customer_location') is-invalid @enderror" name="customer_location" value="{{ $edit->customer_location }}" required autocomplete="customer_location" autofocus>

                                            @error('customer_location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>


                                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"  value="{{ $edit->phone_number }}" required autocomplete="phone_number" autofocus>

                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Income Amouunt') }}</label>


                                                    <input id="income" type="number" class="form-control @error('income') is-invalid @enderror" name="income" value="{{ $edit->income }}" required autocomplete="income" autofocus>

                                                    @error('income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Delevery Fees') }}</label>


                                                        <input id="delevery_fees" type="text" class="form-control @error('delevery_fees') is-invalid @enderror" name="delevery_fees" value="{{ $edit->delevery_fees }}" required autocomplete="delevery_fees" autofocus>

                                                        @error('delevery_fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-5">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Type') }}</label>


                                                            <input id="product_type" type="text" class="form-control @error('product_type') is-invalid @enderror" name="product_type" value="{{ $edit->product_type }}" required autocomplete="product_type" autofocus>

                                                            @error('product_type')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>



                                                            <div class="col-md-5">
                                                                <label  for="email" class="col-md-4 col-form-label text-md-right">Payment Method</label>

                                                                   <select class="form-control" name="payment">
                                                                      <option>Choose... </option>
                                                                      <option>cash</option>
                                                                      <option>bank</option>
                                                                      <option>Cash+delivery</option>


                                                                    </select>

                                                            </div>




                                                                <div class="col-md-5">
                                                                    <label  for="text" class="col-md-4 col-form-label text-md-right">Captain Name</label>

                                                                      <select class="form-control" name="captain_name">
                                                                       @foreach($name as $data)
                                                                      <option >{{$data->name}}</option>
                                                                     @endforeach
                                                                    </select>


                                                                     </div>
                                                                <div class="col-md-5">
                                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Merchant') }}</label>


                                                                        <input id="merchant" type="text" class="form-control @error('merchant') is-invalid @enderror" name="merchant" value="{{ $edit->merchant }}" required autocomplete="merchant" autofocus>

                                                                        @error('merchant')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Note') }}</label>


                                                                                <textarea id="note" type="text" class="form-control " name="note"  required autocomplete="note" autofocus>{{ $edit->note }}</textarea>

                                                                            @error('note')
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
