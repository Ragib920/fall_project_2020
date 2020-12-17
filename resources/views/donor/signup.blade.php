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
                        <a class="nav-link" href="{{ url('recent_activities')}}">Recent Activities</a>
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
                </ul>
            </div>
        </div>
    </nav>
    <!--====================================================
    sign up form section html part start here
    =====================================================-->
    <section class="clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-6">
                     <div class="d-flex justify-content-center pt-3">
                        <img src="{{ asset('frontend/images/logo2.png')}}" class="img-fluid"  alt="Responsive image">
                    </div>

                    @if(Session::has('signup'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('signup')}}
                        </div>
                    @endif
                    <form method="POST" action="{{ url('donor/signup')}}"  class="border p-4">
                        @csrf
                        <p class="d-flex justify-content-center h4 pb-4">Donor Sign Up Form</p>
                        <div class="form-group">
                            <label >Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your Full Name"required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label >Email </label>
                                <input type="email" name="email" class="form-control"  placeholder="Enter Your Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label >Contact</label>
                                <input type="text" name="contact" class="form-control" placeholder="Enter Your Contact Number" required>
                            </div>
                        </div>
                        <label >Address </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input"  type="radio" name="area" id="inlineRadio1" value="Mohammadpur">
                                <label class="form-check-label" for="inlineRadio1">Mohammadpur</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area" id="inlineRadio2" value="Mirpur">
                                <label class="form-check-label" for="inlineRadio2">Mirpur</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area" id="inlineRadio2" value="Dhanmondi">
                                <label class="form-check-label" for="inlineRadio2">Dhanmondi</label>
                            </div>
                            <br><br>
                            <div class="form-group col-md-6">
                                <textarea class="form-control" name="address" placeholder="Enter Address here"></textarea>
                            </div>

                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" placeholder="required a strong password"required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100 ">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
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
                    <a class="nav-link" href="{{ url('recent_activities')}}"> Chech in points</a>
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
