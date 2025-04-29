
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('main-title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/Favicon.png') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    {!! htmlScriptTagJsApi() !!}

</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-7">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h2>Dar-Ul-Falah Login</h2></a>
        
                                <form class="mt-5 mb-5 login-input" action="{{ route('login.auth') }}" method="POST">

                                    @csrf

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name" value="{{ old('name') }}" name="name" autocomplete="off">
                                    </div>

                                    @error('name')

                                      <div class="alert alert-danger" role="alert">

                                       {{ $message }}

                                      </div>
                                        
                                    @enderror

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" name="password">
                                    </div>

                                    @error('password')

                                      <div class="alert alert-danger" role="alert">

                                        {{ $message }}

                                      </div>
                          
                                    @enderror

                                    <div class="recaptcha-box mb-4">

                                        {!! htmlFormSnippet() !!}

                                        @error('g-recaptcha-response')

                                          <div class="alert alert-danger mt-3" role="alert">

                                            {{ $message }}
                                            
                                          </div>

                                        @enderror

                                    </div>


                                    <button type="submit" class="btn login-form__btn submit w-100">Log In</button>

                                    @if(session('error'))

                                        <div class="alert alert-danger mt-3" role="alert">
                        
                                        {{ session('error') }}
                        
                                        </div>
                            
                                    @endif
                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





