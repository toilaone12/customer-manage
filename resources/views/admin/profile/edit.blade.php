@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 m-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa báo giá</h4>
                        <p class="card-description text-success">
                        @php
                            $noti = Session::get('noti');
                            if(isset($noti) && $noti){
                                echo $noti;
                            }
                        @endphp
                        </p>
                        <form class="forms-sample" method="POST" action="{{route('profile.update',['id' => $profile->maHSTT])}}">
                            @csrf
                            <div class="form-group">
                                <label for="loaiHS">Loại hồ sơ</label>
                                <input type="text" class="form-control" required value="{{$profile->loaiHS}}" name="loaiHS" id="loaiHS" placeholder="Loại hồ sơ">
                                @error('loaiHS')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ngayLap">Ngày lập</label>
                                <input type="date" class="form-control" min="{{date('Y-m-d')}}" required value="{{date('Y-m-d',strtotime($profile->ngayLap))}}" name="ngayLap" id="ngayLap" placeholder="Ngày lập">
                                @error('ngayLap')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="noiDung">Nội dung</label>
                                <input type="text" class="form-control" required value="{{$profile->noiDung}}" name="noiDung" id="noiDung" placeholder="Nội dung">
                                @error('noiDung')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="canCu">Căn cứ</label>
                                <input type="text" class="form-control" required value="{{$profile->canCu}}" name="canCu" id="canCu" placeholder="Căn cứ">
                                @error('canCu')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="soTienMoi">Số tiền</label>
                                <input type="phone" class="form-control" min=0 required value="{{$profile->soTien}}" name="soTien" id="soTienMoi" placeholder="Số tiền">
                                @error('soTien')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="thoiHanThanhToan">Thời hạn thanh toán</label>
                                <input type="date" class="form-control" min="{{date('Y-m-d')}}" required value="{{date('Y-m-d',strtotime($profile->thoiHanThanhToan))}}" name="thoiHanThanhToan" id="thoiHanThanhToan" placeholder="Thời hạn thanh toán">
                                @error('thoiHanThanhToan')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hinhThucThanhToan">Hình thức thanh toán</label>
                                <input type="text" class="form-control" required value="{{$profile->hinhThucThanhToan}}" name="hinhThucThanhToan" id="hinhThucThanhToan" placeholder="Hình thức thanh toán">
                                @error('hinhThucThanhToan')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Xác nhận</button>
                            <a href="{{route('profile.list')}}" class="btn btn-light">Quay lại</a>
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
