@extends ('layout.master3')

@section('content3')
@section('content1')


</div>
    </div>
    <!-- /.sidebar -->
</aside>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">TRIP DATATABLES DATE RANGE</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_date" placeholder="Start Date" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_date" placeholder="End Date" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Trip Status</label>
                            </div>
                            <select class="custom-select" id="select_std">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">captain Name</label>
                            </div>
                            <select class="custom-select" id="select_res">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>




                </div>
                <div>

                    <button id="d_filter" class="btn btn-sm btn-outline-info">Filter date</button>
                    <button id="reset_std" class="btn btn-sm btn-outline-info">calaulation</button>
                    <button id="reset_res" class="btn btn-sm btn-outline-info">Filter Trip Status</button>
                    <button id="reset" class="btn btn-sm btn-outline-warning">Reset</button>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless" id="record_table" style="width:100%;">
                                <thead>
                                  <th>id </th>
                                  <th>date_id </th>
                                  <th>captain_id </th>
                                  <th id="captain">captain_name</th>
                                  <th>phone_number</th>
                                  <th> captain_action</th>
                                  <th> trip_status</th>
                                  <th id="tf">total_fare </th>

                                  <th id="comm">eta</th>
                                  <th>pickup_to_dropoff_distance</th>
                                  <th>date</th>
                                  <th id="ac">counter</th>
                                  <th id="comm">sum</th>
                                </tr>

                                </thead>

                            </table>
                            <table class="table table-responsive-sm table-bordered table-striped table-sm" style="width:100%;">
                            <tbody>
                                <tr class="badge  badge-warning">
                                    <td id="fathi">Total:</td>
                                    <td id="buttonDemoAjax">
                                        <a class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                        </a></td>
                                        <td id="button"></td>

                                </tr>
                            </tbody>

                        </table>



    <script>
        $(function() {
            $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });

        });
        // Fetch Standard
        function fetch_std() {
            $.ajax({
                url: "{{ route('getstatus') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var stdBody = "";
                    for (var key in data) {
                        stdBody +=
                             `<option value="${data[key]['trip_status']}">${data[key]['trip_status']}</option>`;
                    }
                    $("#select_std").append(stdBody);
                }
            });
        }

        fetch_std();

        function fetch_res() {
            $.ajax({
                url: "{{ route('getcaptain') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var resBody = "";
                    for (var key in data) {
                        resBody += `<option value="${data[key]['captain_name']}">${data[key]['captain_name']}</option>`;
                    }
                    $("#select_res").append(resBody);
                }
            });
        }

        fetch_res();

        // Fetch Result





        // Fetch name Records
        function fetch(std, res, start_date, end_date) {
            $.ajax({
                 url: "{{ route('tripe/records') }}",
                type: "GEt",
                data: {
                    std: std,
                    res: res,
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    var t = 1;
                    var com=3;
                    var x=0,y=0;
                    var test = 0;

                    $('#record_table').DataTable({

                        "data": data.tripe,
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy','excel', 'pdf', 'print'
                        ],
                        "responsive": true,
                        "searching": false,
                        "destroy": true,
                        "columns": [
						{
                                  "data": "id",
                                  "render": function(data, type, row, meta) {
                                      return t++;
                                  }
                              },
                              {
                                  "data": "date_id"
                              },
                              {
                                  "data": "captain_id"
                              },
                              {
                                'title':"captain name",
                                  "data": "captain_name"
                              },
                              {
                                  "data": "phone_number"
                              },
                              {
                                  "data": "captain_action"
                              },
                              {
                                  "data": "trip_status"
                              },
                              {
                                  "data": "total_fare"
                                //  $('#total_fare').html(settings.json.total);

                              },


                              {
                                  "data": "eta",
                                  "render":  function(data, type, row, meta) {   return "43";}

                              },
                              {
                                  "data": "pickup_to_dropoff_distance"
                              },
                              {
                                  "data": "created_at",
                                  "render": function(data, type, row, meta) {
                                      return moment(row.created_at).format('DD-MM-YYYY');
                                  }
                              },


                              {
                                  "data": "id",
                                  "render":  function(data, type, row, meta) {   return document.innerHTML = `<a href= t_editm_view/${row.id}   class="btn btn-outline-warning btn-sm">Edit</a> <a href= t_distory/${row.id} class="btn btn-outline-danger btn-sm">Delete</a>`;}

                                // "render":  function(data, type, row, meta) {   return document.getElementById('ac').innerHTML = "  <a href='{{  url('t_editm_view/1')  }}' class='btn btn-outline-warning btn-sm'>Edit</a> <a class='btn btn-outline-warning btn-sm'>Delete</a>";}




                              },






                          ]


                    });

                    $(document).ready(function() {
            $('#record_table thead th').each(function(i) {
                calculateColumn(i);
            });
        });


                }

            });


        }
        fetch();
         // Fetch calculateColumn
         function calculateColumn(index) {
            var total = 0;
            var captainn ;

            $('#record_table tr').each(function() {
                var value = parseInt($('td', this).eq(7).text());
                var value1 =$('td', this).eq(3).text();
                if (!isNaN(value)) {
                    total += value;
                }
                captainn=value1;
               });

             //  let status = $('#status').children("option:selected").val();
                 $('#fathi').eq(index).text(+ total);
                 $('#captain').eq(index).text(captainn);





              }
              calculateColumn();
               // Filter test



               $(document).on("click", "#buttonDemoAjax", function(e) {
                 e.preventDefault();
                 var table= document.getElementById("fathi").innerHTML;
                 var captain1= document.getElementById("captain").innerHTML;
                 var captain=captain1.split(' ').join('_');
                 alert("captain name = " + captain + " total fare = " + table +" ");


                 return document.getElementById("button").innerHTML=`<a  class="btn btn-outline-warning btn-sm"  href= co_create/`+ table +`/`+ captain +`>save total fare</a>`;




             });





         // Fetch Records
        function d_fetch(start_date, end_date) {
            $.ajax({
              url: "{{ route('tripe/d_records') }}",
                type: "GEt",

                data: {

                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    var i = 1;
                    var test = 0;
                    $('#record_table').DataTable({



                        "data": data.tripe,
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        "responsive": true,
                        "searching": false,
                        "destroy": true,
                        "columns": [
						      {
                                  "data": "id",
                                  "render": function(data, type, row, meta) {
                                      return i++;
                                  }
                              },
                              {
                                  "data": "date_id"
                              },
                              {
                                  "data": "captain_id"
                              },
                              {
                                  "data": "captain_name"
                              },
                              {
                                  "data": "phone_number"
                              },
                              {
                                  "data": "captain_action"
                              },
                              {
                                  "data": "trip_status"
                              },
                              {
                                  "data": "total_fare"

                              },
                              {
                                  "data": "eta"
                              },
                              {
                                  "data": "pickup_to_dropoff_distance"
                              },
                              {
                                  "data": "created_at",
                                  "render": function(data, type, row, meta) {
                                      return moment(row.created_at).format('DD-MM-YYYY');
                                  }
                              },


                              {
                                  "data": "id",
                                  "render":  function(data, type, row, meta) {   return document.innerHTML = `<a href= t_editm_view/${row.id}   class="btn btn-outline-warning btn-sm">Edit</a> <a href= t_distory/${row.id} class="btn btn-outline-danger btn-sm">Delete</a>`;}

                                // "render":  function(data, type, row, meta) {   return document.getElementById('ac').innerHTML = "  <a href='{{  url('t_editm_view/1')  }}' class='btn btn-outline-warning btn-sm'>Edit</a> <a class='btn btn-outline-warning btn-sm'>Delete</a>";}




                              },






                          ]


                    });


                }
            });
        }


        d_fetch();

           // Filter
        $(document).on("click", "#d_filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#record_table').DataTable().destroy();
                d_fetch(start_date, end_date);

            }
        });





            // Reset Standard
            $(document).on("click", "#reset_std", function(e) {
            e.preventDefault();
            var std = $("#select_std").val();
            var res = $("#select_res").val();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (res !== "" && std !== "" && start_date!=="" && end_date!=="") {
                $('#record_table').DataTable().destroy();
                fetch(std, res, start_date, end_date);

            } else {

                $('#record_table').DataTable().destroy();
                fetch();
                alert("Ensure input data is correctly");
            }
        });

        // Reset Result
        $(document).on("click", "#reset_res", function(e) {
            e.preventDefault();
            $("#select_res").html(`<option value="">Choose...</option>`);
            var std = $("#select_std").val();

            if (std == "") {
                alert("Both Trip Status required");
                $('#record_table').DataTable().destroy();
                fetch();
                fetch_res();
            } else {
                $('#record_table').DataTable().destroy();
                fetch(std, '');
                fetch_res();
            }
        });

        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $("#select_std").html(`<option value="">Choose...</option>`);
            $("#select_res").html(`<option value="">Choose...</option>`);

        });

    </script>

@endsection
