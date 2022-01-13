@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<form action="/groups/addmember/{{$group->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Group</label>
        <input type="text" class="form-control" name="nama_group" value="{{$group->name}}" required readonly>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Teman</label>
        <select class="form-select" aria-label="Default select example" name="friend_id" required>
            <option value="">Pilih teman untuk dimasukkan ke grup</option>
            @foreach ($friend as $f)
            <option value="{{$f->id}}">{{$f->nama}}</option>
            @endforeach
        </select>
    </div>
    <input type="hidden" class="form-control" name="anggota_masuk" value="{{$group->anggota_masuk + 1}}" required readonly>
    <input type="hidden" class="form-control" name="anggota_keluar" value="{{$group->anggota_keluar}}" required readonly>
    <input type="hidden" class="form-control" name="anggota_saat_ini" value="{{$group->anggota_saat_ini}}" required readonly>
    
    <button type="submit" class="btn btn-primary">Tambah ke group</button>
</form>

@endsection