
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">

    <title>Login</title>

    <!-- Styles -->
    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
            font-family: 'Kanit', sans-serif;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }
    </style>
</head>

<body>
    <!-- Full Page Intro -->
    <div class="view full-page-intro" style="background-image: url('../img/1.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="container">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-3 mb-4 white-text text-center text-md-left"></div>

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 text-center text-md-center">
                        <!--Card-->
                        <div class="card animated bounceInDown">
                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form novalidate method="POST" action="{{ route('login') }}">
                                        @csrf
                                    <!-- Heading -->
                                    <h3 class="dark-grey-text text-center">
                                        <strong>{{ __('Login') }}</strong>
                                    </h3>
                                    <hr>

                                    <div class="md-form">

                                        <br>
                                        <p align="left"><i class="fas fa-user"></i> {{ __('Username') }}</p>
                                        <input type="text" id="username" class="form-control  @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="md-form">
                                        <br>
                                        <p align="left"><i class="fas fa-eye-slash"></i> {{ __('Password') }}</p>
                                        <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="form-group row ml-3">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>

                                    <div class="text-center">

                                        <button class="btn btn-info" type="submit">{{ __('Login') }}</button>
                                        <hr>
                                    </div>
                                    <a href="{{ route('register') }}">Register</a> 
                                </form>
                                <!-- Form -->
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
