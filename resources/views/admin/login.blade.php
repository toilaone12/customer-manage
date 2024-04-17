<!DOCTYPE html>
<html lang="en">
@php
use Illuminate\Support\Facades\Session;
@endphp
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('be/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('be/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('be/assets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="stylesheet" href="{{asset('be/assets/css/font.css')}}">
    <!-- endinject -->
    <link rel="icon" sizes="32x32" href="https://cdn-faadf.nitrocdn.com/PXDhkKuePccLPNjQsiSGnpotGfeqKVRu/assets/static/optimized/wp-content/uploads/2020/09/383ef0bf0ed3c976cd25f4d2a31a71c3.cropped-512x512-favicon-01-32x32.png">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{asset('be/assets/images/logo.png')}}" alt="logo">
                            </div>
                            <h4>Chào mừng đến với trang quản trị</h4>
                            <h6 class="fw-light">Đăng nhập để vào trang quản trị</h6>
                            <p class="card-description text-danger">
                            @php
                                $noti = Session::get('noti');
                                if(isset($noti) && $noti){
                                    echo $noti;
                                }
                            @endphp
                            </p>
                            <form class="pt-3" action="{{route('admin.signIn')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" value="" name="tenDangNhap" required id="exampleInputEmail1" placeholder="Tên đăng nhập">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" value="" name="matKhau" required id="exampleInputPassword1" placeholder="Mật khẩu">
                                </div>
                                <a href="{{route('admin.forget')}}" class="w-100 d-flex justify-content-end mb-3 text-decoration-none">
                                    Quên mật khẩu?
                                </a>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Đăng nhập</button>
                                </div>
                                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Nhớ mật khẩu
                                        </label>
                                    </div>
                                </div> -->
                                <div class="text-center mt-4 fw-light">
                                    Bạn đang không có tài khoản? <a href="{{route('admin.register')}}" class="text-primary">Đăng ký</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('be/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('be/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('be/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('be/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('be/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('be/assets/js/template.js')}}"></script>
    <script src="{{asset('be/assets/js/settings.js')}}"></script>
    <script src="{{asset('be/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
</body>

</html>
