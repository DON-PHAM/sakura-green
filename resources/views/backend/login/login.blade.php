<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sakura-green Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{!! asset('admin/LTE/plugins/fontawesome-free/css/all.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('admin/LTE/plugins/jqvmap/jqvmap.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('admin/LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('backend') !!}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('admin/LTE/plugins/iCheck/square/blue.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin/LTE/plugins/jquery-ui/jquery-ui.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin/LTE/dist/css/adminlte.min.css') !!}">
    <style type="text/css">
        .container-login100 {
            background-image: url({!! asset('admin/images/bg-system.jpg') !!});
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed accent-lightblue">
<div class="wrapper">
    <style>
        a {
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #f39c12;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0px;
        }

        p {
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul, li {
            margin: 0px;
            list-style-type: none;
        }

        input {
            outline: none;
            border: none;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }

        input::-webkit-input-placeholder {
            color: #999999;
        }

        input:-moz-placeholder {
            color: #999999;
        }

        input::-moz-placeholder {
            color: #999999;
        }

        input:-ms-input-placeholder {
            color: #999999;
        }

        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        .forgot {
            font-size: 14px;
            color: #424242;
            line-height: 1.4;
            float: right;
            margin-top: 20px;
        }

        .remember {
            margin-top: 20px;
            float: left;
            font-size: 14px;
            color: #424242;
            line-height: 1.4;
        }

        .logo {
            max-width: 150px;
        }

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }

        .container-login100::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.9;
        }

        .wrap-login100 {
            width: 350px;
            border-radius: 10px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, .6);
            opacity: 0.9;
            border: 1px solid #809fff;
        }

        .login {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .login-title-des a {
            font-size: 25px;
            color: #042efb;
            line-height: 2.5;
            text-align: center;
            width: 100%;
            display: block;
            text-shadow: -1px 2px 4px #ffffff;
        }

        .login-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .login-avatar img {
            width: 100%;
        }

        .wrap-input100 {
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .input100 {
            font-size: 15px;
            line-height: 1.2;
            color: black;
            border: 2px solid #f39c12;
            display: block;
            width: 100%;
            background: #fff;
            height: 50px;
            border-radius: 7px;
            padding: 0 30px 0 53px;
        }

        .focus-input100 {
            display: block;
            position: absolute;
            border-radius: 7px;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: #f39c12;
        }

        .input100:focus + .focus-input100 {
            -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
            animation: anim-shadow 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        @keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        .symbol-input100 {
            font-size: 15px;
            color: #999999;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-left: 30px;
            pointer-events: none;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .input100:focus + .focus-input100 + .symbol-input100 {
            color: #00c6fb;
            padding-left: 23px;
        }

        .container-login-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .login-btn {
            font-size: 15px;
            line-height: 1.5;
            color: white;
            width: 50%;
            height: 50px;
            border-radius: 7px;
            background: #f9710c;
            border: 2px solid #FFFFFF;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            position: relative;
            z-index: 1;
        }

        .login-btn::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 7px;
            top: 0;
            left: 0;
            background: #005bea;
            background: -webkit-linear-gradient(left, #bd7b28, #bd7b28);
            background: -o-linear-gradient(left, #bd7b28, #bd7b28);
            background: -moz-linear-gradient(left, #bd7b28, #bd7b28);
            background: linear-gradient(left, #bd7b28, #bd7b28);
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            opacity: 0;
        }

        .login-btn:hover {
            background: transparent;
            color: #fff;
        }

        .login-btn:hover:before {
            opacity: 1;
        }

        .validate-input {
            position: relative;
        }

        @media (max-width: 576px) {
            .wrap-login100 {
                padding-top: 80px;
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        .main-login {
            padding-top: 10px;
            padding-bottom: 20px;
        }
    </style>
    <div class="container-login100">
        <div class="wrap-login100 main-login">
            <form action="login" method="post">
                @csrf

                <div class="login-title-des col-md-12 p-b-41">
                    <a><b>Sakura-green.com</b></a>
                </div>
                <div class="col-md-12 form-group has-feedback 1">
                    <div class="wrap-input100 validate-input form-group ">
                        <input class="input100 form-control" type="email" placeholder="Email" name="email"
                               value="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
<i class="fa fa-user"></i>
</span>
                    </div>
                </div>
                <div class="col-md-12 form-group has-feedback 1">
                    <div class="wrap-input100 validate-input form-group ">
                        <input class="input100 form-control" type="password" placeholder="Password" name="password"
                               value="">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
<i class="fa fa-lock"></i>
</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container-login-btn">
                        <button class="login-btn" type="submit">
                            Login
                        </button>
                    </div>
                    <div class="checkbox input text-center remember">
                        <label>
                            <input class="checkbox" type="checkbox" name="remember" value="1">
                            <b>Remember</b>
                        </label>
                    </div>
                </div>
                <input type="hidden" name="_token" value="rtnlZBUeLLxJi5OEsS1fEGfSYkq2XYHkLHvBDAmG">
            </form>
        </div>
    </div>
</div>


<script src="{!! asset('admin/LTE/plugins/jquery/jquery.min.js') !!}"></script>

<script src="{!! asset('admin/LTE/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>


<script src="{!! asset('admin/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<script src="{!! asset('admin/LTE/plugins/jqvmap/jquery.vmap.min.js') !!}"></script>
<script src="{!! asset('admin/LTE/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script>


<script src="{!! asset('admin/LTE/plugins/summernote/summernote-bs4.min.js') !!}"></script>

<script src="{!! asset('backend') !!}"></script>
<script src="{!! asset('admin/LTE/plugins/iCheck/icheck.min.js') !!}"></script>
<script>
    $(function () {
        $('.checkbox').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
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
                var route_prefix = (options && options.prefix) ? options.prefix : 'sc_admin/uploads';
                var target_input = $('#' + $(this).data('input'));
                var target_preview = $('#' + $(this).data('preview'));
                window.open(route_prefix + '?type=' + type, 'File manager', 'width=900,height=600');
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

    LA.token = "rtnlZBUeLLxJi5OEsS1fEGfSYkq2XYHkLHvBDAmG";

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

<script>
    $(function () {
        $(".date_time").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
</body>
</html>