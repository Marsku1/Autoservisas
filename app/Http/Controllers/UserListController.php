<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserList;
class UserListController extends Controller
{
    public function index()
    {
        $users = UserList::all();
        return view ('UserList.list')->with('users', $users);
    }

    public function edit($id)
    {
        $user = UserList::find($id);
        return view('UserList.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      =>  'required',
            'email'  =>  'required',
            'role'        =>  'required'
        ]);

        $user = UserList::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('UserList')->with('success', 'User updated!');
    }

    public function destroy($id)
    {
        UserList::destroy($id);
        return redirect('UserList')->with('success', 'User deleted!');
    }

}
