@extends('layouts.app')


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
        <div class="content-body">
            <section id="dashboard-ecommerce">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Grup Teman</h4>
                        <a href="/friends" class="btn btn-primary btn-icon"> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/friends" method="GET">
                            <div class="row">
                                @foreach ($friend as $friends)
                                <div class="col-sm-4">
                                    <div class="card border-info mb-3" style="max-width: 30rem;">
                                        <div class="card-header bg-primary text-white">
                                            <b>Friends Detail</b>
                                        </div>
                                        <div class="card-body bg-white text-dark bg-opacity-10">
                                            <table class="table table-borderless table-sm text-left mt-1" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td>Nama Teman</td>
                                                        <td>:</td>
                                                        <td>{{ $friends['nama'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Tlp</td>
                                                        <td>:</td>
                                                        <td>{{ $friends['no_tlp'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td>{{ $friends['alamat'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Group Saat ini</td>
                                                        <td>:</td>
                                                        <td>{{ $friends['groups_id'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

@push('script')


<!-- BEGIN: Vendor JS-->
<script src=" {{ asset('/vendors/js/vendors.min.js') }}">
</script>
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