<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('back-end/img/logo.png')}}" width="45" height="45">
        </div>
        <div class="sidebar-brand-text mx-3">Small Dog</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.product.index') }}">
            <i class="fa fa-bars"></i>
            <span>รายการสินค้า</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.category.index') }}">
            <i class="fa fa-table"></i>
            <span>ประเภทสินค้า</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.order.index') }}">
            <i class="fa fa-sort"></i>
            <span>คำสั่งซื้อ</span></a>
    </li>
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.sweety.index') }}">
            <i class="fa fa-history"></i>
            <span>Sweety</span></a>
    </li> --}}
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.topping.index') }}">
            <i class="fa fa-history"></i>
            <span>ท็อปปิ้ง</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.customer.index')}}">
            <i class="fas fa-user"></i>
            <span>ข้อเสนอแนะ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
