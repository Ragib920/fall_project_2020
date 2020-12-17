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
            <a class="navbar-brand" href="{{ url('donor/home')}}"> <img src="{{ asset('frontend/images/logo.png')}}"
             class="img-responsive" alt="Responsive image"
              height="35" /> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button"
            data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('donor/home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('donor/my_post')}}">My post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('donor/create_post')}}">Creat Post</a>
                    </li>
                    <li class="nav-item" >
                    <a class="nav-link" href="{{ url('/Logout')}}">sigh out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--====================================================
   create post form section html part start here
    =====================================================-->
    <section class="create_post">
        <div class ="containner">
            <div class="row pt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-md-offset-2 pt-5">
                    <h1>Create post</h1>
                    <form method="POST" action="{{ url('donor/create_post')}}" >
                    @if(Session::has('create_post'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('create_post')}}
                        </div>
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title : <span class="require"></span></label>
                            <input type="text" name="title" class="form-control" name="title" />
                        </div>
                        

                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea name="description" rows="5" class="form-control" name="description" ></textarea>
                        </div>
                        
                        <div class="form-group">
                            <p><span class="require"></span> </p>
                        </div>
                        <div class="form-group">
                        
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                        <div class="col-md-3"></div>
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
