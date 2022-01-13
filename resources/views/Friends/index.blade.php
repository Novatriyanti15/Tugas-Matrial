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
                        <h4>Daftar Teman</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($friends as $friend)
                            <div class="col-sm-4">
                                <div class="card card-primary border-primary">
                                    <div class="card-header text-dark border-bottom">
                                        <h4>Friends</b>
                                    </div>
                                    <div class="card-body p-2 text-dark bg-opacity-10">
                                        <a href="/friends/{{$friend['id']}}" class="card-title">{{ $friend['nama'] }}</a>
                                        <h6 class="card-subtitle mb-1 mt-1 text-muted">No. Telp : {{ $friend['no_tlp'] }}</h6>
                                        <p class="card-text">Alamat : <br>{{ $friend['alamat'] }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="/friends/{{ $friend['id'] }}" method="POST">
                                            @csrf
                                            <a href="/friends/{{$friend['groups_id']}}/detail" class="btn btn-sm btn-primary">Detail Teman</a>
                                            <a href="/friends/{{$friend['id']}}/edit" class="btn btn-sm btn-warning">Edit Teman</a>
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete Teman</b>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{ $friends-> links() }}
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->
        </div>
    </div>
</div>

@endsection


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