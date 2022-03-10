<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-5">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-13">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Barang PT.Industri Gula Glenmore</h1>
                            </div>

                            <!-- pembuka form register -->
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- namae -->
                                <div class="form-group">
                                    <div class = "form-group">
                                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="{{ __('Username') }}">

 <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>                   -->
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- end name -->

                                <!-- email -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="{{ __('E-Mail Address') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <!-- end email -->

                                <!-- password -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <!-- <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="{{ __('Password') }}"> -->
                                            <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                             name="password" required autocomplete="new-password " placeholder="{{ __('Password') }}">
                                           
                                             @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <!-- <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="{{ __('Confirm Password') }}"> -->
                                            <input id="password-confirm" type="password" class="form-control form-control-user" 
                                            name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                                    </div>
                                </div>
                                <!-- end password -->
                                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>
                                <!-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <hr>
                            <!-- forgot password -->
                            <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                            @endif
                            </div>
                            <!-- end -->

                            <!-- already akun -->
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="adminjs/sb-admin-2.min.js"></script>

</body>

</html