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
    NavBar html code start here
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
                        <a class="nav-link" href="{{ url('recent_activities')}}">Check in points</a>
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
    banner html code start here
    =====================================================-->
    <section class="banner bg-image">
        <div class="container">
            <h2>Don't Worry We are Here: </h2>
            <p> Care For Dogs </p>
            <h3> The best thing you can do in this world is save a life..</h3>
            <form method="get" action="#">
                <!-- <a class="button" href="{{ url('signup')}}">Join with us</a> -->
            </form>
            <h4>The more they will get love the more they will show their loyalty.</h4>
        </div>
    </section>
    <!--====================================================
    current situuation of stray dogs html code start here
    =====================================================-->
    <section class="current-situation pb-3">
        <div class="container">
            <div class="pt-5 pb-5 text-center">
                <p class=" font-weight-bold text-center h3" >Current Situation of Stray Dogs of Dhaka city </p>
                <p>During Covid-19</p>
            </div>
            <div class="row" >
                <div class="col-md-8 pt-3" >
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('frontend/images/strayDogs1.jpg ')}}" class="d-block w-100" alt="Responsive image">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('frontend/images/strayDogs2.jpg ')}}" class="d-block w-100" alt="Responsive image">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('frontend/images/strayDogs3.jpg ')}}" class="d-block w-100" alt="Responsive image">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
                <div class="col-md-4 ">
                   <p class="text-secondary text-justify pt-3"> Specially in our city of Dhaka, there are many helpless dogs on the streets. For lack of proper food, they have to rely on the food thrown by Dustin. Not only that, sometimes he attacks people for food. Their behavior is getting worse day by day due to lack of adequate food. Violence is increasing day by day. Due to which we are accepting various difficulties.In this epidemic of 2020, the condition of dogs has become more miserable. Lack of food is losing their behavioral characteristics. Either dying for lack of food or becoming violent. We should come forward to save the dogs of the city. Extending a hand of sympathy to them. We can make them dirty. </p>
                </div>
              </div>
        </div>
    </section>
    <hr>
    <!--====================================================
        our vission html past start here
    =====================================================-->
    <section class="vission pb-3">
        <div class="container">
            <div class="pt-5 pb-5 text-center">
                <p class=" font-weight-bold text-center h3" >What we want to do for stray dogs? </p>
                <p>And how we do?</p>
                <div>
                    <P class="text-secondary pt-5 h4">We have mention some area to collect foods for dogs.You have to just post a food donatin request.Our volunteer find your through your location and collect the Food</P>
                    <p class="text-secondary pt-2 h5">tAfter collecting minimum foods ,we have some several check points to distributr them among the dogs on several two or three times in a day.</p>
                    <p class="text-secondary  pt-2 pb-5 ">The more they will get love the more they will show their loyalty</p>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-4 ">
                   <p class="text-secondary text-justify pt-3"> Specially in our city of Dhaka, there are many helpless dogs on the streets. For lack of proper food, they have to rely on the food thrown by Dustin. Not only that, sometimes he attacks people for food. </p>
                   <p class="text-secondary text-justify pt-2"> Their behavior is getting worse day by day due to lack of adequate food. Violence is increasing day by day. Due to which we are accepting various difficulties.</p>
                   <p class="text-secondary text-justify pt-2">In this epidemic of 2020, the condition of dogs has become more miserable. Lack of food is losing their behavioral characteristics. Either dying for lack of food or becoming violent. We should come forward to save the dogs of the city. Extending a hand of sympathy to them. We can make them dirty </p>
                </div>
                <div class="col-md-4 p-3" >
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('frontend/images/card1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Collecting Food</h5>
                          <p class="card-text">We have mention some area to collect foods for dogs.You have to just post a food donatin request.Our volunteer find your through your location and collect the Food.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3" >
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('frontend/images/card2.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Distributing  Food</h5>
                          <p class="card-text">After collecting minimum foods ,we have some several check points to distributr them among the dogs on several two or three times in a day.</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </section>
    <hr>
    <!--====================================================
        targeted area html part start
    =====================================================-->
    <section class="targeted-area">
        <div class="container">
            <p class="h2 text-center pt-5">We have Target some several Area Initially</p>
            <p class="text-center pt-2">Ans Fixed some several check points to feed stray dogs</p>
            <p class="h3 text-center pt-2 pb-5">we need youe Help</p>
           <div class="banner">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner text-center text-white p-5" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <p class="h1 pt-5">Dhanmondi</p>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <p class="h1 pt-5">Mohammadpur</p>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <p class="h1 pt-5">Mirpur</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
           </div>
        </div>
    </section>
    <hr>
    <!--====================================================
        footer html part start
    =====================================================-->
    <section class="comment">
        <div class="container ">
            <div class="row pl-3 pt-5 d-flex justify-content-start pb-3" >
                <div class="col-xs-3 d-flex justify-content-end">
                    <img src="{{ asset('frontend/images/comment.jpg')}}" class=""/>
                </div>

                <div class="col-xs-5 pt-5 pb-5 clearfix" >
                    <div class="card ">
                          <p class="card-text p-3 text-datk ">The best thing you can do in this world is save a life.</p>
                          <p class="card-title text-secondary"> -  Nawrin Nuha</p>
                    </div>
                </div>
            </div>
            <div class="row pl-3 d-flex justify-content-end clearfix" >
                <div class="col-xs-5 pt-5" >
                    <div class="card ">
                          <p class="card-text p-3 text-justify text-dark">we want to save their life and make them have a good life. .</p>
                          <p class="card-subtitle text-secondary text-right"> Ragib Shahriar -</p>
                    </div>
                </div>
                <div class="col-xs-3">
                    <img src="{{ asset('frontend/images/comment3.jpg')}}" class=""/>
                </div>
            </div>
            <div class="row pl-3 pb-3 d-flex justify-content-start clearfix" >
                <div class="col-xs-3">
                    <img src="{{ asset('frontend/images/comment2.jpg')}}" class=""/>
                </div>

                <div class="col-xs-5 pt-5 pb-5" >
                    <div class="card ">
                          <p class="card-text p-3 text-datk ">The more they will get love the more they will show their loyalty..</p>
                          <p class="card-title text-secondary"> - Amanul Shikder</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--====================================================
        footer html part start
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
    <!--====================================================
    =====================================================-->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
