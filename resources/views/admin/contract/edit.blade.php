@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 m-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa hợp đồng</h4>
                        <p class="card-description text-success">
                        @php
                            $noti = Session::get('noti');
                            if(isset($noti) && $noti){
                                echo $noti;
                            }
                        @endphp
                        </p>
                        <form class="forms-sample" method="POST" action="{{route('contract.update',['id' => $contract->maHD])}}">
                            @csrf
                            <div class="form-group">
                                <label for="tenHD">Tên hợp đồng</label>
                                <input type="text" class="form-control" required value="{{$contract->tenHD}}" name="tenHD" id="tenHD" placeholder="Tên hợp đồng">
                                @error('tenHD')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ngayLap">Ngày lập</label>
                                <input type="date" class="form-control" min="{{date('Y-m-d')}}" required value="{{date('Y-m-d',strtotime($contract->tenHD))}}" name="ngayLap" id="ngayLap" placeholder="Ngày lập">
                                @error('ngayLap')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dieuKhoan">Điều khoản</label>
                                <textarea class="form-control" required style="height: 150px;" name="dieuKhoan" id="dieuKhoan" placeholder="Điều khoản" cols="30" rows="10">{{$contract->dieuKhoan}}</textarea>
                                @error('dieuKhoan')
                                <p class="mt-2 text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Xác nhận</button>
                            <a href="{{route('contract.list')}}" class="btn btn-light">Quay lại</a>
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
