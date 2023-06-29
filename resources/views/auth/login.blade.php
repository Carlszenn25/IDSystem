<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background: linear-gradient(to bottom left, black 50%, #F6B923 50%);
    }
    
    .custom-bg-color {
        background-color: #1E34AB;
    }

</style>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center align-items-center" style="height: 99vh;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="col-lg-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="">
                                    <div style="display: flex; justify-content: center;">
                                        <img src="{{ asset('img/rntvs_logo.png') }}" alt="" style="width:150px;" class="">
                                    </div>
                                </div>  
                                <div class="card-body custom-bg-color rounded-bottom">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <label for="inputEmail">Username/LRN</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            <label for="inputPassword">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
