@extends('admin.dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="mb-5">Danh sách báo giá</h3>
        <table id="myTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên báo giá</th>
                    <th>Mục tiêu</th>
                    <th>Phạm vi áp dụng</th>
                    <th>Ngày lập</th>
                    <th>Thời hạn áp dụng</th>
                    <th>Phụ lục</th>
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
                    <td>{{$one->tenBG}}</td>
                    <td>{{$one->mucTieu}}</td>
                    <td>{{$one->phamViApDung}}</td>
                    <td>{{date('d/m/Y',strtotime($one->ngayLap))}}</td>
                    <td>{{date('d/m/Y',strtotime($one->thoiHanApDung))}}</td>
                    <td>{{$one->phuLuc}}</td>
                    <td>
                        <a href="{{route('quote.edit',['id' => $one->maBG])}}" class="btn btn-success d-block m-auto px-0"><i class="fa-solid fs-17 fa-wrench"></i></a>
                        <a data-id="{{$one->maBG}}" class="delete-quote btn btn-danger d-block m-auto px-0 mt-2"><i class="fa-solid fs-17 fa-trash-can"></i></a>
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
