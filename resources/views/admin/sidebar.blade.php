<div class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Trang chủ</span>
            </a>
        </li>
        <li class="nav-item nav-category">Quản lý khách hàng</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="customer">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Quản lý khách hàng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="customer">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('customer.list')}}">Danh sách khách hàng</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('customer.insert')}}">Thêm khách hàng</a></li>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Quản lý báo giá</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Quản lý báo giá</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('quote.list')}}">Danh sách báo giá</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('quote.insert')}}">Thêm báo giá</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Hợp đồng</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Hợp đồng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profile">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('contract.list')}}">Danh sách hợp đồng</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('contract.insert')}}">Thêm hợp đồng</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Hồ sơ thanh toán</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Hồ sơ thanh toán</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('profile.list')}}">Danh sách hồ sơ</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('profile.insert')}}">Thêm hồ sơ</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
