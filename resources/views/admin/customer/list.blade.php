@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <table id="myTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Phân loại</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mã số thuế</th>
                    <th>Người liên hệ</th>
                    <th>Mô tả</th>
                    <th>Yêu cầu</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach($list as $one)
                @php
                    $i++;
                @endphp
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$one->maKH}}</td>
                    <td>{{$one->tenKH}}</td>
                    <td>{{$one->phanLoai}}</td>
                    <td>{{$one->diaChi}}</td>
                    <td>{{$one->soDienThoai}}</td>
                    <td>{{$one->email}}</td>
                    <td>{{$one->maSoThue}}</td>
                    <td>{{$one->nguoiLienHe}}</td>
                    <td>{{$one->moTa}}</td>
                    <td>{{$one->yeuCau}}</td>
                    <td>
                        <a href="{{route('customer.edit',['id' => $one->idKH])}}" class="btn btn-success d-block m-auto px-0"><i class="fa-solid fs-17 fa-wrench"></i></a>
                        <a data-id="{{$one->idKH}}" class="delete-customer btn btn-danger d-block m-auto px-0 mt-2"><i class="fa-solid fs-17 fa-trash-can"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- content-wrapper ends -->
    @include('admin.footer')
</div>
<!-- main-panel ends -->
@endsection
