<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main_files/yosri/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="main_files/yosri/font-awesome.min.css" rel="stylesheet" type="text/css" />
     <!-- from internet -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons 2.0.0 -->
      <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/bootstrap-rtl.min.css') }}">
    <!-- template rtl version -->

    <link rel="stylesheet" href="{{ asset('adminlte/css/custom-style.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- font awesome -->
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

      <link rel="stylesheet" href="{{ asset('rating/ratingstar.css') }}">

      <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="main_files/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="main_files/ionicons.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="main_files/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="main_files/css.css" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="main_files/bootstrap-rtl.css">
  <!-- template rtl version -->

  <link rel="stylesheet" href="main_files/custom-style.css">

  <script src="main_files/jquery_002.js"></script>
  <!-- font awesome -->
    <link rel="stylesheet" href="main_files/font-awesome_002.css">

  <script src="main_files/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>

    <link rel="stylesheet" href="main_files/ratingstar.css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="sidebar-mini">
    <div class="wrapper"><!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
              </li>

            </ul>

            <!-- SEARCH FORM -->



            <!-- Right navbar links -->
            {{-- <ul class="navbar-nav mr-auto">
              <!-- Messages Dropdown Menu -->
                   <li style="margin-left: 300px;"> <a href="{{ url('e_pssword') }}">Change Password </a></li>

                   <li style="margin-left: 400px;">

        <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>


        </li>


            </ul> --}}
          </nav>
          <!-- /.navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->


    <div class="form-control">
    <div class="form-group">
              @include('flash-message')
               @yield('content3')
               </div>
                 </div>

  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 434px;">
    <!-- Brand Logo -->
    <a href="{{ url('a_mission') }}" class="brand-link">
        <img src="{{ asset('AdminLTELogo.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Delivery FT</span>
    </a>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


             <li class="nav-item">
    <a href="{{ url('a_mission') }}" class="brand-link">
        <i class=" nav-icon fa fa-dashboard"></i>
        <span class="brand-text font-weight-light">Dashboard</span>

    </a>
</li>

</ul>
    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->


                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>

                                        {{-- {{ Auth::user()->name }} --}}

                                    </p>
                                    <i class=" nav-icon fa fa-user"></i>

                                </a>
                            </li>

                    </ul>
            </nav>
            <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->




                            {{-- <li class="nav-item">
                                <a href="{{ url('m_view') }}" class="nav-link">
                                    <p>

                                        Show Captain

                                    </p>
                                    <i class="nav-icon fa fa-file"></i>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('m_view') }}" class="nav-link">
                                    <p>

                                        Show Captain

                                    </p>
                                    <i class="nav-icon fa fa-file"></i>

                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{ url('m_view') }}" class="nav-link">
                                    <p>

                                        Show Captain

                                    </p>
                                    <i class="nav-icon fa fa-file"></i>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('m_view') }}" class="nav-link">
                                  <p><i class="fa fa-angle-right left"></i></p>
                                    <p>

                                        Show Captain

                                    </p>
                                    <i class="nav-icon fa fa-file"></i>


                                </a>
                            </li>
 --}}





                            <li class="nav-item">
                              <a href="#" class="nav-link">


                                <p>
                                  <i class="nav-icon fa fa-angle-right left"></i>
                                  Captain

                                </p>
                                <i class="nav-icon fa fa-file"></i>

                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="{{ url('c_create') }}" class="nav-link">

                                    <p>Add Captain</p>
                                    <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ url('c_display') }}" class="nav-link">

                                    <p>Show Captain</p>
                                     <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                              </ul>
                            </li>


                            <li class="nav-item">
                              <a href="#" class="nav-link">


                                <p>
                                  <i class="nav-icon fa fa-angle-right left"></i>
                                  Motors

                                </p>
                                <i class="nav-icon fa fa-file"></i>

                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="{{ url('m_create') }}" class="nav-link">

                                    <p>Add Motors</p>
                                    <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ url('m_display') }}" class="nav-link">

                                    <p>Show Motors</p>
                                     <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link">


                                <p>
                                  <i class="left fa fa-angle-right"></i>
                                  Tripe



                                </p>
                                <i class="nav-icon fa fa-file"></i>

                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="{{ url('t_create') }}" class="nav-link">

                                    <p>Add Tripe</p>
                                    <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('t_import') }}" class="nav-link">

                                      <p>import Tripe</p>
                                      <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                <li class="nav-item">
                                  <a href="{{ url('t_display') }}" class="nav-link">

                                    <p>Show Tripe</p>
                                     <i class="fa fa-circle nav-icon"></i>
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">


                                  <p>
                                    <i class="nav-icon fa fa-angle-right left"></i>
                                    Expenses

                                  </p>
                                  <i class="nav-icon fa fa-file"></i>

                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="{{ url('e_create') }}" class="nav-link">

                                      <p>Add Expenses</p>
                                      <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{ url('e_display') }}" class="nav-link">

                                      <p>Show Expenses</p>
                                       <i class="fa fa-circle nav-icon"></i>
                                    </a>
                                  </li>
                                </ul>
                              </li>

                           <li class="nav-item">
                                <a href="{{ url('m_view') }}" class="nav-link">

                                    <p>

                                      Orders

                                    </p>
                                    <i class="nav-icon fa fa-file"></i>


                                </a>
                            </li>











                                          </ul>

                          </li>


                </ul>
            </nav>


            <!-- /.sidebar-menu -->
        </div>


    </div>
   <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">Delivery</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
             <!-- /.content-wrapper -->

    <!-- /.sidebar -->
</aside>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">LARAVEL DATATABLES DATE RANGE</h1>
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
                                <label class="input-group-text" for="inputGroupSelect01">Standard</label>
                            </div>
                            <select class="custom-select" id="select_std">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Result</label>
                            </div>
                            <select class="custom-select" id="select_res">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>

                    <button id="d_filter" class="btn btn-sm btn-outline-info">Filter date</button>
                    <button id="reset_std" class="btn btn-sm btn-outline-info">Filter Reset</button>
                    <button id="reset_res" class="btn btn-sm btn-outline-info">Filter Standard</button>
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
                                        <th>Name</th>
                                        <th>Standard</th>
                                        <th>Percentage</th>
                                        <th>Result</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js">
    </script>
    <!-- Momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

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
                url: "{{ route('standards') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var stdBody = "";
                    for (var key in data) {
                        stdBody +=
                            `<option value="${data[key]['standard']}">${data[key]['standard']}</option>`;
                    }
                    $("#select_std").append(stdBody);
                }
            });
        }

        fetch_std();

        // Fetch Result
        function fetch_res() {
            $.ajax({
                url: "{{ route('results') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var resBody = "";
                    for (var key in data) {
                        resBody += `<option value="${data[key]['result']}">${data[key]['result']}</option>`;
                    }
                    $("#select_res").append(resBody);
                }
            });
        }

        fetch_res();


        // Fetch name Records
        function fetch(std, res) {
            $.ajax({
                url: "{{ route('students/records') }}",
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
                        "data": data.students,
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        "responsive": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "name"
                            },
                            {
                                "data": "standard",
                                "render": function(data, type, row, meta) {
                                    return `${row.standard}th Standard`;
                                }
                            },
                            {
                                "data": "percentage",
                                "render": function(data, type, row, meta) {
                                    test =`${row.percentage}`*30/100
                                    return  test;
                                }
                            },
                            {
                                "data": "result"
                            },
                            {
                                "data": "created_at",
                                "render": function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }
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
                url: "{{ route('students/d_records') }}",
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
                        "data": data.students,
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        "responsive": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "name"
                            },
                            {
                                "data": "standard",
                                "render": function(data, type, row, meta) {
                                    return `${row.standard}th Standard`;
                                }
                            },
                            {
                                "data": "percentage",
                                "render": function(data, type, row, meta) {
                                    test =`${row.percentage}`*30/100
                                    return  test;
                                }
                            },
                            {
                                "data": "result"
                            },
                            {
                                "data": "created_at",
                                "render": function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }
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
            fetch();
            fetch_std();
            fetch_res();
        });

    </script>
</body>

</html>
