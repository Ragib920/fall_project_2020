<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
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
                    
                </ul>
            </div>
        </div>
    </nav>
  <!--====================================================
    sign in form section html part start here
    =====================================================-->
    <section class="clearfix">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="d-flex justify-content-center pt-4">
                        <img src="{{ asset('frontend/images/logo2.png')}}" class="img-fluid"  alt="Responsive image">
                    </div>
                    <div class="wrapper border">
                        <form class="form-signin border p-3 clearfix loginForm">
                            <h2 class="form-signin-heading d-flex justify-content-center pb-5"> Admin</h2>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input required="" name="userName" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input  required="" name="userPassword"  value="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <button name="submit" type="submit" class="btn btn-block btn-danger">Sign in</button>
                            </div>
                            <a class="text-danger float-right pt-4 pb-2" href="{{ url('forgot_password')}}" >Fogot Password</a>
                        </form>
                    </div>
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
                    <a class="nav-link" href="{{ url('recent_activities')}}">Chech in points</a>
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
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>

<script type="text/javascript">
    $('.loginForm').on('submit',function (event) {
        event.preventDefault();
        let formData=$(this).serializeArray();
        let email=formData[0]['value'];
        let password=formData[1]['value'];
        let url="/onLogin";
        axios.post(url,{
            email:email,
            password:password
        }).then(function (response) {
           if(response.status==200 && response.data==1){
               window.location.href="/admin/home";
           }
           else{
               alert('Login Fail ! Try Again');
           }
        }).catch(function (error) {
            toastr.error('Login Fail ! Try Again');
        })
    })
</script>

</body>
</html>