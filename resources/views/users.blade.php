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
                <h1 class="text-center">TRIPES DATATABLES DATE RANGE</h1>
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
                                <th>id </th>
                                <th>name </th>
                                <th>email </th>
                                <th>date</th>
                                <th>acr</th>

                              </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script type="text/javascript">
  $(document).ready(function ()
  {
    $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });


    var table = $('#records').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",

            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
         buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],

        responsive: true,
        columns: [
            {
                data: 'id'

            },
            {
                data: 'name'

            },
            {
                data: 'email'

            },
            {

                data: 'created_at',
                render: function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }

            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    });
  });

  // Fetch records
  function fetch(start_date, end_date) {
    $.ajax({
                url: "{{ route('tripe/records') }}",
                type: "GEt",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
         buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],

        responsive: true,
        columns: [
            {
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]


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
                 // fetch(start_date, end_date);
                 alert("Both date ");
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
