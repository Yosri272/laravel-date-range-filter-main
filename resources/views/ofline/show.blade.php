@extends ('layout.ofline1')

@section('content3')
@section('content1')


</div>
    </div>
    <!-- /.sidebar -->
</aside>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">offline DATATABLES DATE RANGE</h1>
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
                                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                            </div>
                            <select class="custom-select" id="select_std">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">payment</label>
                            </div>
                            <select class="custom-select" id="select_res">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>




                </div>
                <div>
                    <button id="d_filter" class="btn btn-sm btn-outline-info">Filter date</button>
                    <button id="reset_std" class="btn btn-sm btn-outline-info">Filter pymant</button>
                    <button id="reset_res" class="btn btn-sm btn-outline-info">Filter Status</button>
                    <button id="reset" class="btn btn-sm btn-outline-warning">Reset</button>


                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless" id="record_table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>order_date </th>
                                        <th> Customer Name</th>
                                        <th> Customer Location</th>
                                        <th>Phone Number</th>
                                        <th> Payment</th>
                                        <th> Delevery Fees</th>
                                        <th>Status</th>
                                        <th>Captain Name </th>
                                        <th>Product Type </th>
                                        <th>Income Amount</th>
                                        <th>Merchant</th>
                                        <th>Note</th>
                                        <th>counter</th>

                                    </tr>
                                </thead>

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
                url: "{{ route('of_getstatus') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var stdBody = "";
                    for (var key in data) {
                        stdBody +=
                             `<option value="${data[key]['status']}">${data[key]['status']}</option>`;
                    }
                    $("#select_std").append(stdBody);
                }
            });
        }

        fetch_std();

        function fetch_res() {
            $.ajax({
                url: "{{ route('of_getcaptain') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var resBody = "";
                    for (var key in data) {
                        resBody += `<option value="${data[key]['payment']}">${data[key]['payment']}</option>`;
                    }
                    $("#select_res").append(resBody);
                }
            });
        }

        fetch_res();

        // Fetch Result





        // Fetch name Records
         // Fetch name Records
         function fetch(std, res) {
            $.ajax({
                url: "{{ route('order/records') }}",
                type: "GEt",
                data: {
                    std: std,
                    res: res
                },
                dataType: "json",
                success: function(data) {
                    var i = 1;
                    var test = 0;
                    $('#record_table').DataTable({
                        "data": data.ofline,
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        "responsive": true,
                        "searching": false,
                        "destroy": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "order_date"
                            },
                            {
                                "data": "customer_name"
                            },
                            {
                                "data": "customer_location"
                            },
                            {
                                "data": "phone_number"
                            },
                            {
                                "data": "payment"
                            },
                            {
                                "data": "delevery_fees"
                            },
                            {
                                "data": "status"
                            },
                            {
                                "data": "captain_name"
                            },
                            {
                                "data": "product_type"
                            },
                            {
                                "data": "income",
                                "render": function(data, type, row, meta) {
                                    return `${row.income}SDG`;
                                }

                            },
                            {
                                "data": "merchant"
                            },
                            {
                                "data": "note"
                            },




                            {

                                "data": "id",
                                "render":  function(data, type, row, meta) {   return document.innerHTML = `<a href= of_editm_view/${row.id}   class="btn btn-outline-warning btn-sm">Edit</a> <a href= of_distory/${row.id} class="btn btn-outline-danger btn-sm">Delete</a>`;}



                            }

                        ]


                    });




                }

            });


        }
        fetch();







         // Fetch Records
         function d_fetch(start_date, end_date) {
            $.ajax({
                url: "{{ route('order/d_records') }}",
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
                        "data": data.ofline,
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        "responsive": true,
                        "responsive": true,
                        "searching": false,
                        "destroy": true,
                        "columns": 	[{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "order_date"
                            },
                            {
                                "data": "customer_name"
                            },
                            {
                                "data": "customer_location"
                            },
                            {
                                "data": "phone_number"
                            },
                            {
                                "data": "payment"
                            },
                            {
                                "data": "delevery_fees"
                            },
                            {
                                "data": "status"
                            },
                            {
                                "data": "captain_name"
                            },
                            {
                                "data": "product_type"
                            },
                            {
                                "data": "income",
                                "render": function(data, type, row, meta) {
                                    return `${row.income}SDG`;
                                }

                            },
                            {
                                "data": "merchant"
                            },
                            {
                                "data": "note"
                            },




                            {

                                "data": "id",
                                "render":  function(data, type, row, meta) {   return document.innerHTML = `<a href= co_editm_view/${row.id}   class="btn btn-outline-warning btn-sm">Edit</a> <a href= co_distory/${row.id} class="btn btn-outline-danger btn-sm">Delete</a>`;}




                            }

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
            $("#select_std").html(`<option value="">Choose...</option>`);
            var res = $("#select_res").val();
            alert(res);
            if (res == "") {
                $('#record_table').DataTable().destroy();
                fetch();
                fetch_std();
            } else {
                $('#record_table').DataTable().destroy();
                fetch('', res);
                fetch_std();
            }
        });

           // Reset Result
           $(document).on("click", "#reset_res", function(e) {
            e.preventDefault();
            $("#select_res").html(`<option value="">Choose...</option>`);
            var std = $("#select_std").val();
            if (std == "") {
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
            $('#record_table').DataTable().destroy();

        });

    </script>

@endsection
