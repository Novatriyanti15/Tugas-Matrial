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
                        <a href="/friends" class="btn btn-primary btn-icon"> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/friends/{{ $friend['id'] }}" method="POST">
                            @csrf
                            <input type="hidden" name="groups_id" value="0">
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="{{old('nama') ? old('nama') : $friend['nama']}}">
                                @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{old('no_tlp') ? old('no_tlp') : $friend['no_tlp']}}">
                                @error('no_tlp')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{old('alamat') ? old('alamat') : $friend['alamat']}}">
                                @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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