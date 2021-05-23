
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
    <title>Register </title>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

