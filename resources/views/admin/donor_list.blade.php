<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Donor list</title>

  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css' )}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('frontend/dist/css/adminlte.min.css')}}">
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a class="navbar-brand" href="{{ url('admin/home')}}"> <img src="{{ asset('frontend/images/logo.png')}}"
                    class="img-responsive" alt="Responsive image"
                    height="35" /> </a>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('admin/home')}}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
            <a href="{{ url('admin/donor_list')}}" class="list-group-item list-group-item-action bg-dark text-white">Donor List</a>
            <a href="{{ url('admin/volunteer_list')}}" class="list-group-item list-group-item-action bg-dark text-white">Volunteer List</a>
            <a href="{{ url('admin/help_post_list')}}" class="list-group-item list-group-item-action bg-dark text-white">Help Post List</a>
            <a href="{{ url('admin/change_password')}}" class="list-group-item list-group-item-action bg-dark text-white">Change password</a>
            <a href="{{ url('/Logout')}}" class="list-group-item list-group-item-action bg-dark text-white">Sign out</a>
          </li>
        </ul>
            </nav>
        </aside>       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
             <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Register Donor List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Register Donor List</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                 <!-- ================================================================= -->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Area</th>
                        <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donor as $donor)
                            <tr>
                                <th>{{ $donor->name }}</th>
                                <th>{{ $donor->email }}</th>
                                <th>{{ $donor->contact }}</th>
                                <th>{{ $donor->area }}</th>
                                <th>{{ $donor->address }}</th>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>


                 <!-- ================================================================= -->
            </Section>
        </div>
        <footer class="main-footer fixed-bottom">
      <div class="container">
        <strong>Copyright &copy; 2020 <a href="#"></a>.</strong>Care For dogs
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.1.0
        </div>
      </div>
    </footer>
    </div>
    <script src="{{ asset('frontend/dist/js/pages/dashboard.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>