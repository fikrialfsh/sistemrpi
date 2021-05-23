
<!--new -->

<!--new -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    

    <!-- Title Page-->
    <title>Login </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="{{asset('cooladmin/css/font-face.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon1.ico')}}" />
    
    

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/bootstrap-4.1/bootstrap.min.css')}}">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/animsition/animsition.min.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/wow/animate.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    
    
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('cooladmin/css/theme.css')}}">

</head>

<body class="animsition">
<form method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <!-- <img src="{{asset('cooladmin/images/icon/logo-blue.png')}}" alt="MajaBaca"> -->
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                    <div class="login-checkbox">
                        <label>
                          <input type="checkbox" name="remember">Remember Me
                             </label>
                                <label>
                                  <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('cooladmin/vendor/jquery-3.2.1.min.js')}}"></script>
    
    <!-- Bootstrap JS-->
    <script src="{{asset('cooladmin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('cooladmin/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('cooladmin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('cooladmin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('cooladmin/vendor/select2/select2.min.js')}}"></script>
    

    <!-- Main JS)}}-->
    <script src="{{asset('cooladmin/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->