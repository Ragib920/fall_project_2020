<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>carefor dogs|home</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>
    <!--====================================================
    ----Navbar----
    =====================================================-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}"> <img src="{{ asset('frontend/images/logo.png')}}"
             class="img-responsive" alt="Responsive image"
              height="35" /> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button"
            data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">About</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('recent_activities')}}">Chech in points</a>
                    </li>
                    <li class="nav-item" >
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sign in
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('login')}}">As a Donor</a>
                                <a class="dropdown-item" href="{{ url('volunteer_login')}}">As a Volunteer</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" >
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sign up
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('donor/signup')}}">As a Donor</a>
                                <a class="dropdown-item" href="{{ url('volunteer/signup')}}">As a Volunteer</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--====================================================
    body html part start here
    =====================================================-->
    <section class="clearfix">
        <div class="container mt-3">
            <p class="pt-5">Chech in points</p>
            <table class="table ">
                <tbody class="">
                    <tr>
                        <div class="row p-6">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 p-3" >
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Mirpur Area:</h5>
                                        <p class="text-secondary"> Checkpoints:</p>
                                        <p class="card-text">Mirpur 10</p>
                                        <p class="card-text">Mirpur 11</p>
                                        <p class="card-text">Mirpur 12</p>
                                    </div>
                                    <div class="card ">
                                        <img class="card-img-top" src="{{ asset('frontend/images/card1.jpg')}}" alt="Card image cap">
                                    </div>
                                    <div>
                                        <a href="{{ url('login')}}" class="btn btn-primary ">Donate Some Food</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </tr>
                    <tr>
                        <div class="row p-6">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 p-3" >
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Mirpur Area:</h5>
                                        <p class="text-secondary"> Checkpoints:</p>
                                        <p class="card-text">Mirpur 10</p>
                                        <p class="card-text">Mirpur 11</p>
                                        <p class="card-text">Mirpur 12</p>
                                    </div>
                                    <div class="card ">
                                        <img class="card-img-top" src="{{ asset('frontend/images/card1.jpg')}}" alt="Card image cap">
                                    </div>
                                    <div>
                                        <a href="{{ url('login')}}" class="btn btn-primary ">Donate Some Food</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </tr>
                     <tr>
                        <div class="row p-6">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 p-3" >
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Mohammadpur Area:</h5>
                                        <p class="text-secondary"> Checkpoints:</p>
                                        <p class="card-text">Kazi nazrul road</p>
                                        <p class="card-text"> Town hall</p>
                                        <p class="card-text"> Iqbal road</p>
                                    </div>
                                    <div class="card ">
                                        <img class="card-img-top" src="{{ asset('frontend/images/card1.jpg')}}" alt="Card image cap">
                                    </div>
                                    <div>
                                        <a href="{{ url('login')}}" class="btn btn-primary ">Donate Some Food</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </section>
    <!--====================================================
    ----footer----
    =====================================================-->
    <section class="footer bg-dark text-white clearfix">
        <div class="container">
            <div class="row pt-5 pb-3 mt-5">
                <div class="col-md-4 mr-5 ">
                    <p clas>Address:</p> <br>
                    <p>Dhaka Housing 1207</p>
                    <p>Ringroad,Mohammadpur</p>
                    <p>Phone: +880 1792761414 </p>
                    <p>       +880 1701034345</p>
                    <p>Email: carefordog@gmail.com</p>
                </div>
                <div class="col-md-3 ml-5 mr-5">
                    <p>Pages</p>
                    <a class="nav-link" href="{{ url('/')}}">Home</a>
                    <a class="nav-link" href="{{ url('/')}}">About</a>
                    <a class="nav-link" href="{{ url('recent_activities')}}">Recent Activities</a>
                </div>
                <div class="col-md-2 ml-5">
                    <p>Social Media Links</p><br>
                    <p>Facebook</p>
                    <p>Instagram</p>
                    <p>Linked in</p>
                    <p>YouTube</p>
                    <p></p>
                </div>
            </div>
            <div class="row float-right">
                <div class="copy-right bg-danger  ">
                    care for dog organization &copy; Copyright 2020
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
