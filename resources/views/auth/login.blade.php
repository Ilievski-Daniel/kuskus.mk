<!DOCTYPE html>
<html lang="en">

<head>
    <title>Најави се!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/img/favicon.ico" rel="icon">
    <link href="/assets/img/favicon.ico" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/login.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('login') }}">
                @csrf
                    <span class="login100-form-title">
						Добредојдовте!
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input id="email" placeholder="Емаил адреса" type="text" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input id="password" placeholder="Лозинка" type="password" class="form-control input100 @error('password') is-invalid @enderror" name="password">
                    </div>

                    <div class="container-login100-form-btn p-t-13 p-b-23 mt-4">
                        <button type="submit" class="login100-form-btn">
							Најави се
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/login.js"></script>
</body>
</html>
