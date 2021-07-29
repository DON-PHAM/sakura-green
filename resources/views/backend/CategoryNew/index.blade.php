@extends('backend.Layout.master')
@section('title','Chuyên mục tin tức')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            <i class="fa fa-indent" aria-hidden="true"></i> Danh sách danh mục
                        </h1>
                        <div class="more_info"></div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="sc_admin"><i class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh sách danh mục</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-border">
                                <div class="card-tools">
                                    <div class="menu-right">
                                        <form action="sc_admin/category" id="button_search">
                                            <div class="input-group input-group" style="width: 350px;">
                                                <input type="text" name="keyword" class="form-control rounded-0 float-right" placeholder="Nhập từ khóa" value="">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="float-left">
                                </div>

                            </div>
                            <div class="card-header with-border">
                                <div class="card-tools">
                                    <div class="menu-right">
                                        <a href="sc_admin/category/create" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                            <i class="fa fa-plus" title="action.add_new"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="float-left">
                                    <div class="menu-left">
                                        <button type="button" class="btn btn-default grid-select-all"><i class="far fa-square"></i></button>
                                    </div>
                                    <div class="menu-left">
                                        <span class="btn btn-flat btn-danger grid-trash" title="Xóa"><i class="fas fa-trash-alt"></i></span>
                                    </div>
                                    <div class="menu-left">
                                        <span class="btn btn-flat btn-primary grid-refresh" title="Làm mới"><i class="fas fa-sync-alt"></i></span>
                                    </div>
                                    <div class="menu-left">
                                        <div class="input-group float-right ml-1" style="width: 350px;">
                                            <div class="btn-group">
                                                <select class="form-control rounded-0 float-right" id="order_sort">
                                                    <option value="id__desc">ID giảm dần</option><option value="id__asc">ID tăng dần</option><option value="title__desc">Tiêu đề theo thứ tự z-a</option><option value="title__asc">Tiêu đề theo thứ tự a-z</option>
                                                </select>
                                            </div>
                                            <div class="input-group-append">
                                                <button id="button_sort" type="submit" class="btn btn-primary"><i class="fas fa-sort-amount-down-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0" id="pjax-container">
                                <div id="url-sort" data-urlsort="sc_admin/category?" style="display: none;"></div>
                                <div class="table-responsive">
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Cấp cha</th>
                                            <th>Công cộng</th>
                                            <th>Trạng thái</th>
                                            <th>Thứ tự</th>
                                            <th>Danh sách cửa hàng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="15">
                                            </td>
                                            <td>15</td>
                                            <td><img alt="Danh mục trái cây 2" title="" src="data/category/fruit-4.png" style=" width:50px; height:50px;"></td>
                                            <td>Danh mục trái cây 2</td>
                                            <td>ROOT</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a><br><i class="nav-icon fab fa-shopify"></i> <a target=_new href="http://m-store.s-cart.org">demo-store</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/15"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(15);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="14">
                                            </td>
                                            <td>14</td>
                                            <td><img alt="Danh mục trái cây 1" title="" src="data/category/fruit-2.png" style=" width:50px; height:50px;"></td>
                                            <td>Danh mục trái cây 1</td>
                                            <td>ROOT</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="http://m-store.s-cart.org">demo-store</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/14"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(14);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="13">
                                            </td>
                                            <td>13</td>
                                            <td><img alt="Phụ kiện nam" title="" src="data/category/img-40.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Phụ kiện nam</td>
                                            <td>Phụ kiện </td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>3</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/13"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(13);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="12">
                                            </td>
                                            <td>12</td>
                                            <td><img alt="Phụ kiện nữ" title="" src="data/category/img-42.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Phụ kiện nữ</td>
                                            <td>Phụ kiện </td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>3</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/12"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(12);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="11">
                                            </td>
                                            <td>11</td>
                                            <td><img alt="Phụ kiện điện thoại" title="" src="data/category/img-40.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Phụ kiện điện thoại</td>
                                            <td>Phụ kiện </td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/11"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(11);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="10">
                                            </td>
                                            <td>10</td>
                                            <td><img alt="Đồ trẻ em" title="" src="data/category/img-14.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Đồ trẻ em</td>
                                            <td>Quần áo</td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/10"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(10);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="9">
                                            </td>
                                            <td>9</td>
                                            <td><img alt="Quần áo nữ" title="" src="data/category/img-18.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Quần áo nữ</td>
                                            <td>Quần áo</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/9"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(9);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="8">
                                            </td>
                                            <td>8</td>
                                            <td><img alt="Quần áo nam" title="" src="data/category/img-14.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Quần áo nam</td>
                                            <td>Quần áo</td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/8"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(8);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="7">
                                            </td>
                                            <td>7</td>
                                            <td><img alt="Thiết bị" title="" src="data/category/img-40.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Thiết bị</td>
                                            <td>Thiết bị điện tử</td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/7"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(7);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="6">
                                            </td>
                                            <td>6</td>
                                            <td><img alt="Máy tính bảng" title="" src="data/category/img-14.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Máy tính bảng</td>
                                            <td>Thiết bị điện tử</td>
                                            <td><span class="badge badge-danger">OFF</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/6"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(6);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="5">
                                            </td>
                                            <td>5</td>
                                            <td><img alt="Máy tính" title="" src="data/category/img-14.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Máy tính</td>
                                            <td>Thiết bị điện tử</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/5"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(5);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="4">
                                            </td>
                                            <td>4</td>
                                            <td><img alt="Phụ kiện " title="" src="data/category/img-18.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Phụ kiện </td>
                                            <td>ROOT</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/4"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(4);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="3">
                                            </td>
                                            <td>3</td>
                                            <td><img alt="Điện thoại" title="" src="data/category/img-42.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Điện thoại</td>
                                            <td>Thiết bị điện tử</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/3"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(3);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="2">
                                            </td>
                                            <td>2</td>
                                            <td><img alt="Quần áo" title="" src="data/category/img-44.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Quần áo</td>
                                            <td>ROOT</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/2"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(2);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="checkbox grid-row-checkbox" type="checkbox" data-id="1">
                                            </td>
                                            <td>1</td>
                                            <td><img alt="Thiết bị điện tử" title="" src="data/category/img-40.jpg" style=" width:50px; height:50px;"></td>
                                            <td>Thiết bị điện tử</td>
                                            <td>ROOT</td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td><span class="badge badge-success">ON</span></td>
                                            <td>0</td>
                                            <td><i class="nav-icon fab fa-shopify"></i> <a target=_new href="https://demo.s-cart.org">s-cart</a></td>
                                            <td>
                                                <a href="sc_admin/category/edit/1"><span title="Chỉnh sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;
                                                <span onclick="deleteItem(1);" title="Xóa" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="block-pagination clearfix m-10">
                                    <div class="ml-3 float-left">
                                        Hiển thị <b>1</b>-<b>15</b> của <b>15</b> kết quả</b>
                                    </div>
                                    <div class="pagination pagination-sm mr-3 float-right">
                                        <ul class="pagination pagination-sm no-margin pull-right">

                                            <li class="page-item disabled"><span class="page-link pjax-container">&laquo;</span></li>



                                            <li class="page-item active"><span class="page-link pjax-container">1</span></li>

                                            <li class="page-item disabled"><span class="page-link pjax-container">&raquo;</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer clearfix">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@stop