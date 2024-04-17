@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="mb-5">Danh sách hồ sơ thanh toán</h3>
        <table id="myTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên hợp đồng</th>
                    <th>Loại hồ sơ</th>
                    <th>Ngày lập</th>
                    <th>Nội dung</th>
                    <th>Căn cứ</th>
                    <th>Số tiền</th>
                    <th>Thời hạn thanh toán</th>
                    <th>Phương thức thanh toán</th>
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
                    @foreach($listContract as $contract)
                    @if($contract->maHD == $one->maHD)
                    <td>{{$contract->tenHD}}</td>
                    @endif
                    @endforeach
                    <td>{{$one->loaiHS}}</td>
                    <td>{{date('d/m/Y',strtotime($one->ngayLap))}}</td>
                    <td>{{$one->noiDung}}</td>
                    <td>{{$one->canCu}}</td>
                    <td width="200">{{number_format($one->soTien,0,',','.')}} đ</td>
                    <td>{{date('d/m/Y',strtotime($one->thoiHanThanhToan))}}</td>
                    <td>{{$one->hinhThucThanhToan}}</td>
                    <td>
                        <a href="{{route('payment.edit',['id' => $one->maHSTT])}}" class="btn btn-success d-block m-auto px-0"><i class="fa-solid fs-17 fa-wrench"></i></a>
                        <a data-id="{{$one->maHSTT}}" class="delete-payment btn btn-danger d-block m-auto px-0 mt-2"><i class="fa-solid fs-17 fa-trash-can"></i></a>
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
