@extends('layouts.app')

@section('title', 'Cobaaaaa')

@section('content')
<form action="/friends" method="GET">
<div class="col-sm-4">
        <div class="card border-info mb-3" style="max-width: 30rem;">
            <div class="card-header bg-primary text-dark">
                <b>Friends Detail</b>
            </div>
            <div class="card-body bg-white p-2 text-dark bg-opacity-10">
                <h6>Nama Teman : {{ $friend['nama'] }} </a> </h6>
                <h6>No Tlp : {{ $friend['no_tlp'] }} </h6>
                <h6>Alamat : {{ $friend['alamat'] }} </h6>
                <h6>Group Saat ini : {{ $friend['groups_id'] }} </h6>
            </div>
        </div>
</form>
        @endsection