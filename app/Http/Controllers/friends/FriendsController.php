<?php

namespace App\Http\Controllers\friends;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Groups;
use App\Models\Users;
use App\Models\User_menu;
use Illuminate\Support\Facades\Auth;


class FriendsController extends Controller
{

    public function index()
    {
        $friends = Friends::orderBy('id', 'desc')->paginate(3);
        $listuser = Users::all();

        $data['friends'] = $friends;
        $data['listuser'] = $listuser;
        $data['dari'] = date('Y-m-d');
        $data['ke'] = date('Y-m-d');
        $data['user'] = AUTH::user();
        $data['title'] = 'Friends';
        $data['menu'] = User_menu::all();

        return view('friends.index', $data);
    }
    public function create()
    {
        return view('friends.create');
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $friends = new Friends;

        $friends->groups_id = $request->groups_id;
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;

        $friends->save();

        return redirect('/');
    }
    public function show($id)
    {
        $friends = Friends::where('id', $id)->first();
        return view('friends.show', ['friend' => $friends]);
    }

    public function edit($id)
    {
        $friends = Friends::where('id', $id)->first();
        $data['friend'] = $friends;
        $data['user'] = AUTH::user();
        $data['title'] = 'Friends';
        return view('friends.edit', $data);
    }
    public function detail($groups_id)
    {
        $groups =  Groups::where('id', $groups_id)->first();
        $friends = Friends::where('groups_id', $groups_id)->get();
        $data['friend'] = $friends;
        $data['group'] = $groups;
        $data['user'] = AUTH::user();
        $data['title'] = 'Friends';
        return view('friends.detail', $data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        Friends::find($id)->update([
            'groups_id' => $request->groups_id,
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        Friends::find($id)->delete();
        return redirect('/');
    }
}
