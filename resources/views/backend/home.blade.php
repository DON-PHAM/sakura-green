@extends('backend.Layout.master')
@section('title','Trang chủ')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            <i class="" aria-hidden="true"></i> Tổng hợp
                        </h1>
                        <div class="more_info"></div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="http://localhost:8080/s-cart/public/sc_admin"><i
                                            class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                            <li class="breadcrumb-item active">Tổng hợp</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Tổng đơn hàng</span>
                                <span class="info-box-number">0</span>
                                <a href="http://localhost:8080/s-cart/public/sc_admin/order" class="small-box-footer">
                                    Xem thêm&nbsp;
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-tags"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Tổng sản phẩm</span>
                                <span class="info-box-number">17</span>
                                <a href="http://localhost:8080/s-cart/public/sc_admin/product" class="small-box-footer">
                                    Xem thêm&nbsp;
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>


                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Tổng khách hàng</span>
                                <span class="info-box-number">0</span>
                                <a href="http://localhost:8080/s-cart/public/sc_admin/customer"
                                   class="small-box-footer">
                                    Xem thêm&nbsp;
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->


                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-map-signs"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Tổng blog</span>
                                <span class="info-box-number">6</span>
                                <a href="http://localhost:8080/s-cart/public/sc_admin/news" class="small-box-footer">
                                    Xem thêm&nbsp;
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Đơn hàng trong tháng</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="chart-days" style="width:100%; height:auto;"></div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Đơn hàng trong năm</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div id="chart-pie" style="width:100%; height:auto;"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id="chart-month" style="width:100%; height:auto;"></div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                <!-- Main row -->
                <div class="row">

                    <!-- Left col -->
                    <div class="col-md-6">
                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Đơn hàng mới</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Trạng thái đơn hàng</th>
                                            <th>Tạo lúc</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">

                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- Left col -->
                    <div class="col-md-6">
                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Khách hàng mới mới</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Tên</th>
                                            <th>Provider</th>
                                            <th>Tạo lúc</th>
                                        </tr>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">

                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->


                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@stop