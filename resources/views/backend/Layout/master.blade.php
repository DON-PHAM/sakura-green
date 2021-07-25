@include('backend.Layout.header')

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed accent-lightblue">

<div class="wrapper">

    <!-- Navbar -->
@include('backend.Module.menu')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('backend.Module.siderbar')

    <!-- Content Wrapper. Contains page content -->
@yield('content')
    <!-- /.content-wrapper -->

@include('backend.Layout.footer')