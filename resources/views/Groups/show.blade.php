@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<form action="/friends" method="GET">
<div class="col-sm-4">
        <div class="card border-info mb-3" style="max-width: 30rem;">
            <div class="card-header bg-primary text-dark">
                <b>{{$group['name']}} Detail</b>
            </div>
            <div class="card-body bg-white p-2 text-dark bg-opacity-10">

                <h6>Deskripsion : {{ $group['description'] }} </a> </h6>
                <h6>Tanggal Dibuat : {{ $group['created_at'] }} </h6>
                <h6>Tanggal Update : {{ $group['updated_at'] }} </h6>
                <h6>History Anggota Masuk :  {{ $group['anggota_masuk'] }} </h6>
                <h6>History Anggota Keluar :  {{ $group['anggota_keluar'] }} </h6>
                <h6>Jumlah Anggota Saat ini :  {{ $group['anggota_saat_ini'] }} </h6>
                <br/><br/>
                @foreach ($group->friends as $friend)

<li class="list-group-item d-flex justify-content-between align-items-center">
    
                    <br/>
    <h6> Nama : {{$friend->nama}} </h6>
    <br/>
    <h6> Tanggal Join : {{ $friend->updated_at}} </h6>
</li>

@endforeach
            </div>
        </div>
</form>
        @endsection