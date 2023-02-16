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
                <h1 class="text-center">MOTOR DATATABLES DATE RANGE</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
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
                </div>
                <div>
                    <button id="filter" class="btn btn-outline-info btn-sm">Filter</button>
                    <button id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless display nowrap" id="records" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Plate Number </th>
                                        <th> Engine serial number </th>
                                        <th>Shashi number </th>
                                        <th>Model</th>
                                        <th>production date</th>
                                        <th>the color</th>
                                        <th> Counter Number</th>
                                        <th> Oil Change</th>
                                        <th>Buy date</th>


                                        <th id="ac">counter</th>
                                      </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  JavaScript -->
    <script>
        $(function() {
            $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
        });

        // Fetch records
        function fetch(start_date, end_date) {
            $.ajax({
                url: "{{ route('motor/records') }}",
                type: "GEt",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    // Datatables
                    var i = 1;
                    $('#records').DataTable({
                        "data": data.motors,

                        // buttons
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'excel', 'pdf', 'print'
                        ],
                        // responsive
                        "responsive": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "motor"
                            },
                            {
                                "data": "plate_number"
                            },
                            {
                                "data": "status"
                            },
                            {
                                "data": "license_number"
                            },
                            {
                                "data": "license_date"
                            },
                            {
                                "data": "counter"
                            },
                            {
                                "data": "counter_number"
                            },
                           
                            {
                                "data": "oil_change",
                                "render": function(data, type, row, meta) {
                                    return `${row.oil_change}KM`;
                                }
                            },

                            {
                                "data": "maintenance_date"
                            },



                            {
                                "data": "motor",
                                "render":  function(data, type, row, meta) {   return document.innerHTML = `<a href= m_display/${row.motor}   class="btn btn-outline-primary btn-sm">Show Motor History</a> \n <a href= m_editm_view/${row.id}   class="btn btn-outline-warning btn-sm">Edit</a> <a href= m_distory/${row.id} class="btn btn-outline-danger btn-sm">Delete</a>`;}




                            },


                        ]
                    });
                }
            });
        }

        fetch();

        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });

        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $('#records').DataTable().destroy();
            fetch();
        });

    </script>

@endsection

