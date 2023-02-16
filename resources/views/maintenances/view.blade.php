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
                <h1 class="text-center">MAINTENANCES DATATABLES DATE RANGE</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="row">


                </div>
                <div>
                   </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm" id="records" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th> Plate Number </th>
                                        <th> Maintenance details </th>
                                        <th>Maintenance Date</th>
                                        <th>amount</th>


                                    </tr>
                                </thead>
                                 <tbody>

                                 <tr>
                                    @foreach($edit as $data)
                                     <td>{{$data->id}}</td>
                                     <td>{{$data->plate_number}}</td>
                                     <td>{{$data->maintenance_details}}</td>
                                     <td>{{$data->Maintenance_date}}</td>
                                    <td>{{$data->amount}}SDG</td>

                                </tr>
                                @endforeach


                          </tbody>
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
                url: "{{ route('a_mission') }}",
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
                        "data": data.maintenances,

                        // buttons
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'excel', 'pdf', 'print'
                        ],
                        // responsive


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
