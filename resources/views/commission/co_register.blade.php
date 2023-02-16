
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
     <div class="card-header"><strong> Add Expenses</strong> </div>
                    <div class="card-body">


<div class="row">
                <div class="col-lg-12">
                  <div class="card">





                  <div class="card-body">

                  <form method="GET" action="{{  ('co_register1')  }}">

        <div class="form-group row">

                <div class="col-md-5">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('captain_name') }}</label>


                        <input  readonly id="captain_name" type="text" class="form-control @error('captain_name') is-invalid @enderror" name="captain_name" value="{{ $captain }}" required autocomplete="captain_name" autofocus>

                        @error('captain_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Number of trips') }}</label>


                                    <input readonly  id="number_trips" type="number" class="form-control @error('number_trips') is-invalid @enderror" name="number_trips" value="{{ $id }}" required autocomplete="price" autofocus>

                                    @error('number_trips')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="col-md-5">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Rate') }}</label>


                                    <input id="amount_commission" type="text" class="form-control @error('amount_commission') is-invalid @enderror" name="amount_commission" value="{{ old('amount_commission') }}" required autocomplete="driver" autofocus>
                                      <div class="form-text text-muted">
                                        Insert Amount Commission Fixed Amount (Ex: 8 for 8%)
                                      </div>
                                    @error('amount_commission')
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
                                <button id="butsave" type="submit" class="btn btn-primary">
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
<script>
    $(document).ready(function() {

        $('#butsave').on('click', function() {
          var number_trips = $('#number_trips').val();
          var captai= $('#captain_name').val().split('_').join(' ');
          var captain_name =captai;
          var amount_commission = $('#amount_commission').val();

          if(number_trips!="" && captain_name!="" && amount_commission!="" ){
            /*  $("#butsave").attr("disabled", "disabled"); */
              $.ajax({
                  url: "/co_register1",
                  type: "GET",
                  data: {
                    number_trips: number_trips,
                    captain_name: captain_name,
                    amount_commission: amount_commission
                  },
                  cache: false,
                  success: function(dataResult){
                      console.log(dataResult);
                      var dataResult = JSON.parse(dataResult);
                      if(dataResult.statusCode==200){
                        window.location = "/co_register1";
                      }
                      else if(dataResult.statusCode==201){
                         alert("Error occured !");
                      }

                  }
              });
          }
          else{
              alert('Please fill all the field !');
          }
      });
    });
    </script>

@endsection

</body>
</html>
