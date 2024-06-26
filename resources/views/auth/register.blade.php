<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />



    </head>

    <style>
            body{
            background-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
                background-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
                margin-top:20px;}

            /* ===== LOGIN PAGE ===== */
            .login-box {
            -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
                    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            }

            @media (min-width: 992px) {
            .login-box {
                margin: 40px 0;
            }
            }

            .login-box .form-wrap {
            padding: 30px 25px;
            border-radius: 10px;
            -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
                    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
            }

            @media (min-width: 768px) {
            .login-box .form-wrap {
                padding: 45px;
            }
            }

            @media (min-width: 992px) {
            .login-box .form-wrap {
                margin-top: -40px;
                margin-bottom: -40px;
                padding: 60px;
            }
            }

            .login-box .socials a {
            -webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
                    box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
            }

            .login-section {
            position: relative;
            z-index: 0;
            }

            .login-section::after {
            position: absolute;
            content: '';
            right: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0.15;
            z-index: -1;
            background-image: url(../img/shapes/login-wave2.svg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top right;
            -webkit-animation-duration: 3s;
                    animation-duration: 3s;
            -webkit-animation-direction: alternate;
                    animation-direction: alternate;
            -webkit-animation-iteration-count: infinite;
                    animation-iteration-count: infinite;
            -webkit-animation-name: pulse;
            0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url(../img/shapes/login-wave1.svg);
            background-size: cover;
            background-position: top right;
            -webkit-animation-duration: 6s;
                    animation-duration: 6s;
            -webkit-animation-direction: alternate;
                    animation-direction: alternate;
            -webkit-animation-iteration-count: infinite;
                    animation-iteration-count: infinite;
            -webkit-animation-name: pulse;
                    animation-name: pulse;
            }

            .login-section .content {
            padding: 45px;
            }

            .form-group .zmdi {
                position: absolute;
                z-index: 1;
                color: #fff;
                background-color: #4e63d7;
                border-radius: 5px;
                height: 100%;
                width: 45px;
                text-align: center;
                font-size: 20px;
                padding-top: 13px;
            }

            .form-group input[type='text'], .form-group input[type='email'], .form-group input[type='password'] {
                padding-left: 60px;
            }

            .form-control {
                border: 1px solid #e1e1e1;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-radius: 5px;
                -webkit-transition: all .3s ease;
                transition: all .3s ease;
                background-color: #fff;
                color: #858585;
                font-weight: 400;
                position: relative;
            }

            .login-box .socials a {
                -webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
                box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
            }
            .socials a {
                width: 35px;
                height: 35px;
                background-color: #6893e1;
                border-radius: 50%;
                -webkit-box-shadow: 0 3px 2px 0 #516cd9;
                box-shadow: 0 3px 2px 0 #516cd9;
                text-align: center;
                color: #fff;
                padding-top: 10px;
                font-size: 16px;
                margin-right: 10px;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }
            y: 0.10;
            right: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url(../img/shapes/login-wave1.svg);
            background-size: cover;
            background-position: top right;
            -webkit-animation-duration: 6s;
                    animation-duration: 6s;
            -webkit-animation-direction: alternate;
                    animation-direction: alternate;
            -webkit-animation-iteration-count: infinite;
                    animation-iteration-count: infinite;
            -webkit-animation-name: pulse;
                    animation-name: pulse;
            }

            .login-section .content {
            padding: 45px;
            }

            .form-group .zmdi {
                position: absolute;
                z-index: 1;
                color: #fff;
                background-color: #4e63d7;
                border-radius: 5px;
                height: 100%;
                width: 45px;
                text-align: center;
                font-size: 20px;
                padding-top: 13px;
            }

            .form-group input[type='text'], .form-group input[type='email'], .form-group input[type='password'] {
                padding-left: 60px;
            }

            .form-control {
                border: 1px solid #e1e1e1;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-radius: 5px;
                -webkit-transition: all .3s ease;
                transition: all .3s ease;
                background-color: #fff;
                color: #858585;
                font-weight: 400;
                position: relative;
            }






            .login-box .socials a {
                -webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
                box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
            }
            .socials a {
                width: 35px;
                height: 35px;
                background-color: #6893e1;
                border-radius: 50%;
                -webkit-box-shadow: 0 3px 2px 0 #516cd9;
                box-shadow: 0 3px 2px 0 #516cd9;
                text-align: center;
                color: #fff;
                padding-top: 10px;
                font-size: 16px;
                margin-right: 10px;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }



    </style>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-11 mt-60 mx-md-auto">
                    <div class="login-box bg-white pl-lg-5 pl-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-6">
                                <div class="form-wrap bg-white">
                                    <h4 class="btm-sep pb-3 mb-5">Register</h4>
                                    <form class="form" method="post" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-account"></span>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                                </div>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-account"></span>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-account"></span>
                                                    <input id="phone" type="text" class="form-control @error('name') is-invalid @enderror" name="phone" required  autofocus placeholder="Phone number">
                                                </div>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-account"></span>
                                                    <input id="type_of_loss" type="text" class="form-control @error('name') is-invalid @enderror" name="type_of_loss" autofocus placeholder="type of lose e.g sibling, parent">                                                </div>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-key"></span>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-key"></span>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm Password">
                                                </div>

                                            </div>

                                            <div class="col-12 mt-30">
                                                <button type="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">Sign Up
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content text-center">
                                    <div class="border-bottom pb-5 mb-5">
                                        <h3 class="c-black">Already a member?</h3>
                                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Sign In</a>
                                    </div>
                                    <h5 class="c-black mb-4 mt-n1">Or Sign Up With</h5>
                                    <div class="socials">
                                        <a href="#" class="zmdi zmdi-facebook"></a>
                                        <a href="#" class="zmdi zmdi-twitter"></a>
                                        <a href="#" class="zmdi zmdi-google"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
