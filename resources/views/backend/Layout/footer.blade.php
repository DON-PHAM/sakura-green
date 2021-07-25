<footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
        <strong>Env</strong>
        local
        &nbsp;&nbsp;
        <strong>Version</strong>
        6.4.1
    </div>
    <strong>Copyright &copy; 2021 <a href="https://s-cart.org">S-Cart: Free Open Source eCommerce for Business</a>.</strong>
    All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->


<div id="loading">
    <div id="overlay" class="overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
</div>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{!! asset('admin/LTE/plugins/jquery/jquery.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('admin/LTE/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{!! asset('admin/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<!-- JQVMap -->
<script src="{!! asset('admin/LTE/plugins/jqvmap/jquery.vmap.min.js') !!}"></script>
<script src="{!! asset('admin/LTE/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script>
<!-- daterangepicker -->

<!-- Tempusdominus Bootstrap 4 -->

<!-- Summernote -->
<script src="{!! asset('admin/LTE/plugins/summernote/summernote-bs4.min.js') !!}"></script>
<!-- overlayScrollbars -->
<script src="{!! asset('admin/LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>


<!-- Sparkline -->
<script src="{!! asset('admin/LTE/plugins/sparklines/sparkline.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('admin/LTE/plugins/fastclick/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('admin/LTE/dist/js/adminlte.js') !!}"></script>

<script src="{!! asset('admin/plugin/sweetalert2.all.min.js') !!}"></script>

<!-- Select2 -->
<script src="{!! asset('admin/LTE/plugins/select2/js/select2.full.min.js') !!}"></script>

<script src="{!! asset('admin/plugin/bootstrap-switch.min.js') !!}"></script>
<!-- AdminLTE for demo purposes -->


<script src="{!! asset('admin/LTE/plugins/iCheck/icheck.min.js') !!}"></script>

<script src="{!! asset('admin/plugin/chartjs/highcharts.js') !!}"></script>
<script src="{!! asset('admin/plugin/chartjs/highcharts-3d.js') !!}"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('chart-days', {
            credits: {
                enabled: false
            },
            title: {
                text: 'Thống kê trong 1 tháng'
            },
            xAxis: {
                categories: ["06-25", "06-26", "06-27", "06-28", "06-29", "06-30", "07-01", "07-02", "07-03", "07-04", "07-05", "07-06", "07-07", "07-08", "07-09", "07-10", "07-11", "07-12", "07-13", "07-14", "07-15", "07-16", "07-17", "07-18", "07-19", "07-20", "07-21", "07-22", "07-23", "07-24", "07-25"],
                crosshair: false

            },

            yAxis: [{
                min: 0,
                title: {
                    text: 'Tổng đơn hàng'
                },
            }, {
                title: {
                    text: 'Tổng số tiền (Bit)'
                },
                opposite: true
            },
            ],

            legend: {
                align: 'left',
                verticalAlign: 'top',
                borderWidth: 0
            },

            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                },
            },

            series: [
                {
                    type: 'column',
                    name: 'Tổng đơn hàng',
                    data: ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                },
                {
                    type: 'spline',
                    name: 'Tổng số tiền (Bit)',
                    color: '#32ca0c',
                    yAxis: 1,
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        borderRadius: 3,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 0.5,
                        borderColor: '#AAA',
                        y: -6
                    }
                },
            ]
        });
    });


    // Set up the chart
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'chart-month',
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 0,
                beta: 10,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'Thống kê trong 12 tháng'
        },
        subtitle: {
            text: 'Dữ liệu so sánh bằng tổng số tiền của đơn hàng, đơn vị Bit'
        },
        legend: {
            enabled: false,
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: ["2020-07", "2020-08", "2020-09", "2020-10", "2020-11", "2020-12", "2021-01", "2021-02", "2021-03", "2021-04", "2021-05", "2021-06", "2021-07"],
            crosshair: false,
        },
        yAxis: [
            {
                min: 0,
                title: {
                    text: 'Tổng số tiền (Bit)'
                },
            }
        ],
        plotOptions: {
            column: {
                depth: 25
            },
            series: {
                dataLabels: {
                    enabled: true,
                    borderRadius: 3,
                    backgroundColor: 'rgba(252, 255, 197, 0.7)',
                    borderWidth: 0.5,
                    borderColor: '#AAA',
                    y: -6
                }
            }
        },
        series: [
            {
                name: 'Tổng số tiền (Bit)',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            },
            {
                type: 'spline',
                color: '#d05135',
                name: 'Tổng số tiền (Bit)',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            }
        ]
    });

    function showValues() {
        $('#alpha-value').html(chart.options.chart.options3d.alpha);
        $('#beta-value').html(chart.options.chart.options3d.beta);
        $('#depth-value').html(chart.options.chart.options3d.depth);
    }

    // Activate the sliders
    $('#sliders input').on('input change', function () {
        chart.options.chart.options3d[this.id] = parseFloat(this.value);
        showValues();
        chart.redraw(false);
    });

    showValues();
</script>

<script>
    Highcharts.chart('chart-pie', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'Thống kê đơn hàng theo thiết bị'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}:{point.y}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Loại thiết bị',
            data: [],
        }]
    });
</script>


<script type="text/javascript">

    $(function () {
        $('input.checkbox').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });

    $(document).on('ready pjax:end', function (event) {
        $('input.checkbox').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    })


</script>


<script type="text/javascript">
    (function ($) {

        $.fn.filemanager = function (type, options) {
            type = type || 'other';

            this.on('click', function (e) {
                type = $(this).data('type') || type;//sc
                var route_prefix = (options && options.prefix) ? options.prefix : 'http://localhost:8080/s-cart/public/sc_admin/uploads';
                var target_input = $('#' + $(this).data('input'));
                var target_preview = $('#' + $(this).data('preview'));
                window.open(route_prefix + '?type=' + type, 'Quản lý file', 'width=900,height=600');
                window.SetUrl = function (items) {
                    var file_path = items.map(function (item) {
                        return item.url;
                    }).join(',');

                    // set the value of the desired input to image url
                    target_input.val('').val(file_path).trigger('change');

                    // clear previous preview
                    target_preview.html('');

                    // set or change the preview image src
                    items.forEach(function (item) {
                        target_preview.append(
                            $('<img>').attr('src', item.thumb_url)
                        );
                    });

                    // trigger change event
                    target_preview.trigger('change');
                };
                return false;
            });
        }

    })(jQuery);

    $('.lfm').filemanager();
</script>


<script type="text/javascript">
    // Select row
    $(function () {
        //Enable check and uncheck all functionality
        $(".grid-select-all").click(function () {
            var clicks = $(this).data('clicks');
            if (clicks) {
                //Uncheck all checkboxes
                $(".box-body input[type='checkbox']").iCheck("uncheck");
                $(".far", this).removeClass("fa-check-square").addClass('fa-square');
            } else {
                //Check all checkboxes
                $(".box-body input[type='checkbox']").iCheck("check");
                $(".far", this).removeClass("fa-square").addClass('fa-check-square');
            }
            $(this).data("clicks", !clicks);
        });

    });

    // == end select row

    function format_number(n) {
        return n.toFixed(0).replace(/./g, function (c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
        });
    }

    // active tree menu
    $('.nav-treeview > li.active').parents('.has-treeview').addClass('active menu-open');
    // ==end active tree menu

</script>

<script>
    function LA() {
    }

    LA.token = "ostEfBxzaYeO0mhFzjz5jsFnFPp8Pu4a26KXBPVu";

    function alertJs(type = 'error', msg = '') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: type,
            title: msg
        })
    }

    function alertMsg(type = 'error', msg = '', note = '') {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true,
        });
        swalWithBootstrapButtons.fire(
            msg,
            note,
            type
        )
    }

    function alertConfirm(type = 'warning', msg = '') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: type,
            title: msg
        })
    }

    $('[data-toggle="tooltip"]').tooltip();
    $('.select2').select2();
</script>
<!--message-->


<script>
    $(function () {
        $(".date_time").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>

</body>
</html>