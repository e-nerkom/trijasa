<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="admin/assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="admin/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="admin/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="admin/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="admin/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="admin/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="admin/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="admin/assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="admin/assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">






</head>

<body class="layout-login-centered-boxed">





    <div class="layout-login-centered-boxed__form">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-4 navbar-light">
            <a href="index.html" class="text-center text-light-gray mb-4">

                <!-- LOGO -->
                <img src="/logo.png" style="width:70px">

            </a>
        </div>
        <div class="card card-body">
            @if (session('status'))
                <div class="alert alert-soft-danger d-flex" role="alert">
                    <i class="material-icons mr-3">info</i>
                    <div class="text-body">{{ session('status') }}</div>
                </div>
            @endif
            
            <form method="POST" action="/register" novalidate>
                @csrf
                <div class="form-group">
                    <label class="text-label" for="name_2">Nama</label>
                    <div class="input-group input-group-merge">
                        <input name="name" type="text" required="" class="form-control form-control-prepended @error('name') is-invalid @enderror" placeholder="Masukan Nama" value="{{old('name')}}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <small class="text-danger pt-1"><i class="fa fa-exclamation-circle"></i> {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="text-label" for="email_2">Email</label>
                    <div class="input-group input-group-merge">
                        <input name="email" type="email" required="" class="form-control form-control-prepended @error('email') is-invalid @enderror" placeholder="Masukan Email" value="{{old('email')}}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <small class="text-danger pt-1"><i class="fa fa-exclamation-circle"></i> {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="text-label" for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input name="password" type="password" required="" class="form-control form-control-prepended @error('password') is-invalid @enderror" placeholder="Masukan password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="material-icons">lock</span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <small class="text-danger pt-1"><i class="fa fa-exclamation-circle"></i> {{ $message }}</small>
                    @enderror
                </div>
                
                <div class="form-group text-center">
                    <button class="btn btn-success btn-lg btn-block mb-3" type="submit">Daftar</button>
                </div>
                <div class="text-center">
                    <span>Sudah punya akun?</span> <a class="text-body text-underline" href="/login"> Login</a>
                </div>
            </form>
        </div>
    </div>


    <!-- jQuery -->
    <script src="admin/assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="admin/assets/vendor/popper.min.js"></script>
    <script src="admin/assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="admin/assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="admin/assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="admin/assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="admin/assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="admin/assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="admin/assets/js/toggle-check-all.js"></script>
    <script src="admin/assets/js/check-selected-row.js"></script>
    <script src="admin/assets/js/dropdown.js"></script>
    <script src="admin/assets/js/sidebar-mini.js"></script>
    <script src="admin/assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="admin/assets/js/app-settings.js"></script>




</body>

</html>