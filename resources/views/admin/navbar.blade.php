@php
use App\Models\Account;
use Illuminate\Support\Facades\Cookie;
$id = Cookie::get('id');
$account = Account::find($id);
$chuCaiDauTien = explode(' ',$account->hoTen);
$chuCaiDauTien = end($chuCaiDauTien);
$chuCaiDauTien = mb_substr($chuCaiDauTien,0,1,'UTF-8');
@endphp
<div class="navbar-menu-wrapper d-flex align-items-top">
    <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            @php $hours = date('H'); @endphp
            <h1 class="welcome-text">@php echo $hours < 24 && $hours >= 18 ? 'Chào buổi tối' : ($hours < 18 && $hours >= 12 ? 'Chào buổi chiều' : 'Chào buổi sáng') @endphp,
            <span class="text-black fw-bold">{{$account->hoTen}}</span></h1>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="rounded bg-danger badge">{{$chuCaiDauTien}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    <p class="rounded bg-danger badge">{{$chuCaiDauTien}}</p>
                    <p class="mb-1 mt-3 font-weight-semibold">{{$account->tenDangNhap}}</p>
                </div>
                <a href="{{route('account.edit')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Thông tin cá nhân</a>
                <a href="{{route('account.logout')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Đăng xuất</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
    </button>
</div>
