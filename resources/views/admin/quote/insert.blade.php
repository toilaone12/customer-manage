@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 m-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm báo giá</h4>
                        <p class="card-description text-success">
                        @php
                            $noti = Session::get('noti');
                            if(isset($noti) && $noti){
                                echo $noti;
                            }
                        @endphp
                        </p>
                        <form class="forms-sample" method="POST" action="{{route('quote.add')}}">
                            @csrf
                            <div class="form-group">
                                <label for="tenBG">Tên báo giá</label>
                                <input type="text" class="form-control" required name="tenBG" id="tenBG" placeholder="Tên báo giá">
                                @error('tenBG')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="mucTieu">Mục tiêu</label>
                                <input type="text" class="form-control" required name="mucTieu" id="mucTieu" placeholder="Mục tiêu">
                                @error('mucTieu')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phamViApDung">Phạm vi áp dụng</label>
                                <input type="text" class="form-control" required name="phamViApDung" id="phamViApDung" placeholder="Phạm vi áp dụng">
                                @error('phamViApDung')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ngayLap">Ngày lập</label>
                                <input type="date" class="form-control" min="{{date('Y-m-d')}}" required name="ngayLap" id="ngayLap" placeholder="Ngày lập">
                                @error('ngayLap')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Thời hạn áp dụng</label>
                                <input type="date" class="form-control" min="{{date('Y-m-d')}}" required name="thoiHanApDung" id="thoiHanApDung" placeholder="Thời hạn áp dụng">
                                @error('thoiHanApDung')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phuLuc">Phụ lục</label>
                                <textarea class="form-control" required style="height: 150px;" name="phuLuc" id="phuLuc" placeholder="Phụ lục" cols="30" rows="10"></textarea>
                                @error('phuLuc')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Xác nhận</button>
                            <a href="{{route('quote.list')}}" class="btn btn-light">Quay lại</a>
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
