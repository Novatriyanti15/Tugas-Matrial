@extends('layouts.app')


@section('content')
<h3>MY GROUP</h3>
<a href="/groups/create" class="card-link btn-primary btn">Tambah Group</a>
<div class="mb-3"></div>
<div class="row">
    @foreach ($groups as $group)
    <div class="col-sm-4">
        <div class="card border-info mb-3" style="max-width: 30rem;">
            <div class="card-header bg-primary text-dark">
                <b>Group</b>
            </div>
            <div class="card-body bg-white p-2 text-dark bg-opacity-10">
                <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name'] }}</a>
                <p class="card-text">{{ $group['description'] }}</p>
                <hr>
                <a href="/groups/addmember/{{$group['id']}}" class="btn btn-primary">Tambah Anggota Teman</a>
                @foreach ($group->friends as $friend)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$friend->nama}}
                    <br>
                    {{$friend->no_tlp}}
                    <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" class="form-control" name="groups_id" value="{{$group->id}}" required readonly>
                        <input type="hidden" class="form-control" name="anggota_masuk" value="{{$group->anggota_masuk}}" required readonly>
                        <input type="hidden" class="form-control" name="anggota_keluar" value="{{$group->anggota_keluar + 1}}" required readonly>
                        <input type="hidden" class="form-control" name="anggota_saat_ini" value="{{$group->anggota_saat_ini}}" required readonly>
                        <button type="submit" class="bedge card-link btn-danger">x</button>
                    </form>
                </li>

                @endforeach
                </ul>
                <hr>
                <a href="/groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit group</a>
                <form action="/groups/{{ $group['id'] }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn-danger">Delete group</b>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $groups-> links() }}
</div>
<div class="mb-3"></div>
@endsection
</div>