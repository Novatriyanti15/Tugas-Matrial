@extends('layouts.login')
@section('title')
Daftar User
@endsection
@section('content')
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="UD CIPTA INDAH">
    <meta name="keywords" content="UD, bangunan, cirebon">
    <meta name="author" content="Sunset Orange">

    <link rel="apple-touch-icon" href="{{ asset('/images/logo/logosmk.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/logo/logosmk.png') }}">

    @stack('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">


    @if (session('status'))
    <div class="toast toast-basic position-fixed fade show" id="toast" role="status" aria-live="polite" aria-atomic="true" data-delay="1000" style="top: 1rem; right: 1rem;" data-autohide="true">
        <div class="toast-header">
            <img src="{{ asset('/images/logo/logosmk.png') }}" class="mr-1" alt="Toast image" height="25" width="25">
            <strong class="mr-5"></strong>
            <small class="text-muted ml-5">0 mins ago</small>
            <button type="button" onclick="myFunction()" class=" ml-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <div class="badge badge-pill badge-light-{{ session('warna') }}">{{ session('status') }}
            </div>
        </div>
    </div>
    @endif



    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <a class="btn btn-info" href="/auth"> Login </a>
            <div>
                <a class="btn btn-success" href="/register"> Register</a>
            </div>
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                        <img src="{{ asset('/images/logo/logosmk.png') }}" height="40" width="40">
                        <h3 class="brand-text">CIPTA INDAH</h3>
                    </a></li>

            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        </div>
    </div>
    @push('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/forms/form-wizard.min.css') }}">
    @endpush
    @section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row p-2 justify-content-between">
                    <div class="col-lg-6 col-sm-4">
                        <h4>Daftar Users</h4>
                    </div>
                    <div class="col-lg-6 col-sm-8 text-right content-justify-end">

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-hover-animation">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($listuser as $index => $lt)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $lt->name }}</td>
                                <td>{{ $lt->email }}</td>
                                <td>{{ $lt->telepon }}</td>
                                <td>{{ $lt->alamat }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- users edit ends -->

    </div>


    @push('script')


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('/js/core/app.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/js/scripts/forms/form-wizard.min.js') }}"></script>

    @endpush