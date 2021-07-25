<nav class="main-header navbar navbar-expand navbar-dark navbar-lightblue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    <form action="" method="get"
          class="form-inline ml-3 d-none d-sm-block">
        <div class="input-group input-group-sm">
            <input name="keyword" class="form-control form-control-navbar" type="search" placeholder="Tìm đơn hàng"
                   aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a class="nav-link" href="" target=_new>
            <i class="fas fa-home"></i>
        </a>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">0</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Bạn có 0 đơn hàng mới</span>
                <div class="dropdown-divider"></div>
                <a href=""
                   class="dropdown-item dropdown-footer">Xem thêm</a>
            </div>
        </li>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="nav-item dropdown user-menu">

            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                <img src="" class="user-image"
                     alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <div class="text-center">
                    <img src="{!! asset('admin/avatar/user.jpg') !!}" class="img-circle"
                         alt="Administrator">
                    <div>
                        Administrator<br>
                        <small>Tham gia từ 2021-07-25 09:18:56</small>
                    </div>
                </div>
                <!-- Menu Footer-->
                <div class="user-footer">
                    <div class="float-left">
                        <a href=""
                           class="btn btn-default btn-flat">Cài đặt</a>
                    </div>
                    <div class="float-right">
                        <a href=""
                           class="btn btn-default btn-flat">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </li>


    </ul>
</nav>