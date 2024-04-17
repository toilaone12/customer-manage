@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 m-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa thông tin cá nhân</h4>
                        @php
                            $noti = Session::get('noti');
                            if(isset($noti) && $noti){
                                echo $noti;
                            }
                        @endphp
                        <form class="forms-sample" method="POST" action="{{route('account.update',['id' => $account->maKH])}}">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="hoTen">Họ và tên</label>
                                        <input type="text" class="form-control" value="{{$account->hoTen}}" required name="hoTen" id="hoTen" placeholder="Họ và tên">
                                        @error('hoTen')
                                        <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tenDangNhap">Tên đăng nhập</label>
                                        <input type="text" class="form-control disabled" value="{{$account->tenDangNhap}}" required name="tenDangNhap" id="tenDangNhap" placeholder="Tên đăng nhập">
                                        @error('tenDangNhap')
                                        <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="matKhau">Mật khẩu</label>
                                        <input type="password" class="form-control" value="" required name="matKhau" id="matKhau" placeholder="Mật khẩu">
                                        @error('matKhau')
                                        <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kiemTraMatKhau">Nhập lại mật khẩu</label>
                                        <input type="password" class="form-control" value="" required name="kiemTraMatKhau" id="kiemTraMatKhau" placeholder="Nhập lại mật khẩu">
                                        @error('kiemTraMatKhau')
                                        <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>          
                            <button type="submit" class="btn btn-primary me-2">Xác nhận</button>
                            <a href="{{route('admin.dashboard')}}" class="btn btn-light">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('admin.footer');
</div>
<!-- main-panel ends -->
@endsection
