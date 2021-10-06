<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->name);
        return User::create([
            "name" => $request->name,
            "email" => $request->email,
            "position" => $request->position,
            "ic_number" => $request->ic_number,
            "phone_number" => $request->phone_number,
            "department" => $request->department,
            "role_id" => $request->user_role,
            "password" => Hash::make($request->password),
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        User::where('id', $id)
            ->update([
                "name" => $request->name,
                "email" => $request->email,
                "position" => $request->position,
                "ic_number" => $request->ic_number,
                "phone_number" => $request->phone_number,
                "department" => $request->department,
                "role_id" => $request->user_role,
            ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->user()->id == $id) return response(["error" => "Could Not delete yourself"], 403);
        return User::find($id)->delete();
    }

    public function changePassword(Request $request, $id)
    {
        // dd($request);
        User::find($id)->update(["password" => Hash::make($request->password)]);

        return redirect('/senarai-pengguna');
    }
}
