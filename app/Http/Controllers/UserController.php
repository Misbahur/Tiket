<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(5);
        return view('user.index', ['users' => $users])
        ->with('i',(request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'username' => 'required|unique:users',
        ]);
  
        $data = new User;
        $data->username = $request->username;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->level_user = $request->level_user;
        $data->password = $request->password;
        $data->save();
            
        return redirect()->route('users.index')->with('success','Berhasil menambahkan User : ' . $request->username );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = User::findOrFail($id);

        return view('user.edit',['users' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'username' => [
                'required',
                Rule::unique('users')->ignore($id,'id')
            ],
        ]);
  
        $data = User::find($id);
        $data->username = $request->username;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->level_user = $request->level_user;
        $data->password = $request->password;
        $data->save();
  
        return redirect()->route('users.index')->with('success','Berhasil mengubah data user : ' . $request->username );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')->with('success','Berhasil Menghapus User');
    }
}
