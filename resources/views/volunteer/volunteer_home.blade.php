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
            <a class="navbar-brand" href="{{ url('volunteer/home')}}"> <img src="{{ asset('frontend/images/logo.png')}}"
             class="img-responsive" alt="Responsive image"
              height="35" /> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button"
            data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('volunteer/pickedup_request')}}">My post</a>
                    </li>
                    <li class="nav-item" >
                    <a class="nav-link" href="{{ url('/Logout')}}">sigh out</a>
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
            <p class="pt-5">Recent Request</p>
            <!-- ===================================================== -->

            <section class="my_post">
                <div class ="containner">
                    <p class="pt-5">  </p>

                <!-- personwise post view -->

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Post Status</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $post)
                            <tr>
                                <td></td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                @if($post->status==0)
                                <td><a class="btn btn-info" href="update_post/{{$post->id}}">Request Pending</a></td>
                                @else
                                <td><button type="button" class="btn btn-success">Request Accepted</button></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </section>

            <!-- ===================================================== -->
        </div>
    </section>
    <!--====================================================
    ----footer----
    =====================================================-->
    <footer class="main-footer fixed-bottom">
      <div class="container">
        <strong>Copyright &copy; 2020 <a href="#"></a>.</strong>Care For dogs
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.1.0
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
