@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 m-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm khách hàng</h4>
                        <p class="card-description text-success">
                        @php
                            $noti = Session::get('noti');
                            if(isset($noti) && $noti){
                                echo $noti;
                            }
                        @endphp
                        </p>
                        <form class="forms-sample" method="POST" action="{{route('customer.add')}}">
                            @csrf
                            <div class="form-group">
                                <label for="tenkh">Tên khách hàng</label>
                                <input type="text" class="form-control" required name="tenKH" id="tenkh" placeholder="Tên khách hàng">
                                @error('tenKH')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phanloai">Phân loại</label>
                                <input type="text" class="form-control" required name="phanLoai" id="phanloai" placeholder="Phân loại">
                                @error('phanLoai')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sdt">Số điện thoại</label>
                                <input type="number" class="form-control" min=0 required name="soDienThoai" id="sdt" placeholder="Số điện thoại">
                                @error('soDienThoai')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dc">Địa chỉ</label>
                                <input type="text" class="form-control" required name="diaChi" id="dc" placeholder="Địa chỉ">
                                @error('diaChi')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" required name="email" id="email" placeholder="Email">
                                @error('email')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="mst">Mã số thuế</label>
                                <input type="text" class="form-control" required name="maSoThue" id="mst" placeholder="Mã số thuế">
                                @error('maSoThue')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nlh">Người liên hệ</label>
                                <input type="text" class="form-control" required name="nguoiLienHe" id="nlh" placeholder="Người liên hệ">
                                @error('nguoiLienHe')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sdt">Mô tả</label>
                                <textarea class="form-control" required style="height: 150px;" name="moTa" id="sdt" placeholder="Mô tả" cols="30" rows="10"></textarea>
                                @error('moTa')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="mt">Yêu cầu</label>
                                <input type="text" class="form-control" required id="yc" name="yeuCau" placeholder="Yêu cầu">
                                @error('yeuCau')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Xác nhận</button>
                            <a href="{{route('customer.list')}}" class="btn btn-light">Quay lại</a>
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
