<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Đăng nhập | VHome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading authentication-bg"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-3 pb-3 text-center bg-primary">
                            <a href="{{ url('/') }}">
                                <span><img src="{{ asset('images/logosite.png') }}" alt="" height="30"></span>
                            </a>
                        </div>

                        <div class="card-body p-2">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">ĐĂNG NHẬP</h4>
                            </div>

                            <form method="post" action="{{ url('/login') }}">
                                @csrf

                                <div class="mb-1">
                                    <label for="username" class="form-label">Điện thoại / Email</label>
                                    <input class="form-control" type="text" name="username" id="username" required=""
                                        placeholder="Điện thoại / Email">
                                </div>
                                @error('username')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                                <div class="mb-1">
                                    <a href="#" class="text-muted float-end"><small>Quên mật khẩu?</small></a>
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Mật khẩu">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                                <div class="mb-1 mb-1">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label" for="remember">Ghi nhớ đăng nhập lần sau</label>
                                    </div>
                                </div>

                                <div class="mb-1 mb-0 text-center">
                                    <button class="btn btn-primary btn-rounded" type="submit"> Đăng nhập </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Bạn chưa có tài khoản? <a href="{{ route('register') }}"
                                    class="text-muted ms-1"><b>Đăng ký</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2021 © VHome
    </footer>

    <!-- bundle -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
