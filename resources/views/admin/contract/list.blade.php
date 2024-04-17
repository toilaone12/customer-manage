@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="mb-5">Danh sách hợp đồng</h3>
        <table id="myTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên báo giá</th>
                    <th>Tên hợp đồng</th>
                    <th>Ngày lập</th>
                    <th>Điều khoản</th>
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
                    @foreach($listQuote as $quote)
                    @if($quote->maBG == $one->maBG)
                    <td>{{$quote->tenBG}}</td>
                    @endif
                    @endforeach
                    <td>{{$one->tenHD}}</td>
                    <td>{{date('d/m/Y',strtotime($one->ngayLap))}}</td>
                    <td>{{$one->dieuKhoan}}</td>
                    <td>
                        <a href="{{route('contract.edit',['id' => $one->maHD])}}" class="btn btn-success d-block m-auto px-0"><i class="fa-solid fs-17 fa-wrench"></i></a>
                        <a data-id="{{$one->maHD}}" class="delete-contract btn btn-danger d-block m-auto px-0 mt-2"><i class="fa-solid fs-17 fa-trash-can"></i></a>
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
