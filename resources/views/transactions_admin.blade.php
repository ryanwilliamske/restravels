<!doctype html>
<html lang="en">
 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Transactions</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/libs/css/style.css">
        <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    </head>
    

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="../index.html">Dashboard</a>
              
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        
                            
                       
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"></h5>
                               
                               </div>
                 <a class="dropdown-item" href="/home"><i class="fas fa-home mr-2">Home</i></a>
                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>
                                        {{ __('Logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
  </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="admin_dash" aria-expanded="false" ><i class="fa fa-fw fa-user-circle"></i>Admin Profile</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="transactions_admin" aria-expanded="false" ><i class="fas fa-fw fa-money-bill-alt"></i>Transactions<span class="badge badge-success">6</span></a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clients_admin"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw  fa-address-book"></i>Clients</a>
                                
                            </li>
                            <!-- This past of the sidebar can be clicked to display a drop down which displays two different pages
                this php is for displaying the services in a table
            while services_form is the other page in the drop down-->

            <li class="nav-item">
                                <a class="nav-link" href="services_admin"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw  fas fa-gem"></i>Services</a>
                                
                            </li> 
                           
                            <li class="nav-item">
                                <a class="nav-link" href="blogs_admin"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw  fas fa-laptop"></i>Blogs</a>
                                
                            </li> 
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">


                                <div class="card-header">
                                  <!--  <h5 class="mb-0">Transactions</h5>-->
                                    <p>Displays the payment transactions of various clients</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <!--Insert table data here for transactions from the payments table
                                                -->
                                                <tr>
                                                    <th>Payment Id</th>
                                                    <th>Payer ID</th>
                                                    <th>Payer Email</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                       
                                            
                                             <?php
                                             use App\Payment;
                                            $transactstuff = Payment::all();
                                            ?>

                                            @foreach($transactstuff as $row)
                                            <tr>

                                                <td>{{$row['payment_id']}}</td>
                                                <td>{{$row['payer_id']}}</td>
                                                <td>{{$row['payer_email']}}</td>
                                                <td>{{$row['amount']}}</td>
                                                <td>{{$row['currency']}}</td>
                                                <td>{{$row['payment_status']}}</td>
                                                





                                            </tr>
                                            @endforeach
                                                      
                                                </tr>
                                              
                                                
                                            </tbody>
                                           
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>
    
    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
       
           
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    </body>
 
</html>