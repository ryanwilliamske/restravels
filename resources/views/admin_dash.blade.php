<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Admin Dashboard</title>
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
                               <!-- NEW CHANGE-->
                            <div class="card-body">
                     <div class="nav-user-info">
                               
                                    <h5 class="mb-0 text-white nav-user-name"> </h5>
                               
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

                            <!--Add Routes of pages in href links-->
                            <li class="nav-item ">
                                <a class="nav-link active" href="admin_dash" aria-expanded="false" ><i class="fa fa-fw fa-user-circle"></i>Admin Profile<span class="badge badge-success">6</span></a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transactions_admin" aria-expanded="false" ><i class="fas fa-fw fa-money-bill-alt"></i>Transactions<span class="badge badge-success">6</span></a>
                                
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

<!--
                    <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fab fa-fw fas fa-gem"></i>Services</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="services_admin">Display services</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="services_categories">Categories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            -->
                           
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                               
                                <div class="page-breadcrumb">
                                 
                                    <div class="card" id="images">
                                        <!--Enter user first and last name here-->
                                            <h5 style= "background-color: #0e0c28 ; color:#FFFFFF" class="card-header"></h5>
                                            <div class="card-body" >
                                                <!--User profile pic-->
                                                   <div id="profile_info" style="margin-right: auto" clas="">
                                                   <!--Display user info here from users table-->
                                                  <h class="text-primary">Email Address</h>
                                                  <p class="text-dark">Administartor@gmail.com</p>

                                                  <h class="text-primary">Address</h>
                                                  <p class="text-dark">Nairobi</p>

                                                  <h class="text-primary">City</h>
                                                  <p class="text-dark">Nairobi</p>

                                                  <h class="text-primary">Country</h>
                                                  <p class="text-dark">Kenya</p>
                                            </div>
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
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>