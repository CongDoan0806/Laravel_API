<div id="header">
    <!-- Top Header -->
    <div class="header-top bg-light py-2 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <ul class="top-menu d-flex list-unstyled m-0">
                <li class="me-3"><a href="#"><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Q1</a></li>
                <li><a href="#"><i class="fa fa-phone"></i> 0163 296 7751</a></li>
            </ul>
            <ul class="top-details d-flex list-unstyled m-0">
                <li class="me-3"><a href="/admin"><i class="fa fa-user"></i> Tài khoản</a></li>
                <li class="me-3"><a href="#">Đăng ký</a></li>
                <li><a href="#">Đăng nhập</a></li>
            </ul>
        </div>
    </div>

    <!-- Middle Header (Logo & Search) -->
    <div class="header-body py-3 shadow-sm bg-white">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" id="logo"><img src="https://idodesign.vn/wp-content/uploads/2023/10/35-mau-thiet-ke-logo-tiem-banh-dep-31.jpg" width="200" alt="Logo"></a>
            <form class="d-flex border rounded px-2 py-1" role="search" method="get" action="/">
                <input type="text" class="form-control border-0 me-2" name="s" placeholder="Nhập từ khóa...">
                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
            <div class="cart position-relative">
                <a href="#" class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống)</a>
                <div class="cart-dropdown position-absolute bg-white shadow p-3">
                    <p class="text-center">Giỏ hàng của bạn trống.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="header-bottom bg-secondary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-toggler" data-bs-toggle="collapse" href="#main-menu"><i class="fa fa-bars"></i> Menu</a>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-5"><a class="nav-link text-white" href="/page/trangchu">Trang chủ</a></li>
                        <li class="nav-item me-5 dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">Sản phẩm</a>
                            <ul class="dropdown-menu sub-menu">
                                @foreach($loai_sp as $loai)
                                    <li><a class="dropdown-item" href="/page/product/type/{{$loai->id}}">{{ $loai->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item me-5"><a class="nav-link text-white" href="/page/about">Giới thiệu</a></li>
                        <li class="nav-item me-5"><a class="nav-link text-white" href="/page/contact">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
