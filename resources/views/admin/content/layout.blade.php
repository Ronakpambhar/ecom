@extends('admin.content.link')
@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand">
                    <!-- Logo icon -->
                    <b class="logo-icon ps-2">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="light-logo"
                            width="25" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text ms-2">
                        <!-- dark Logo text -->
                        <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="light-logo" />
                    </span>
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse justify-content-end" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav float-end">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle"
                                width="31" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off me-1 ms-1"></i>
                                Logout</a>
                        </ul>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">
                                Categories
                            </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{url('categories')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span
                                        class="hide-menu">Add Category</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{url('subcategries')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span
                                        class="hide-menu">Add Sub Category</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Products </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span
                                        class="hide-menu">Add Product</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">View Products</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    @yield('pagesection')
</div>
@endsection
