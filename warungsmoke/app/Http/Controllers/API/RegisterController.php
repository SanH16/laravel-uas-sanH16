<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    public function register(Request $request)
    {
        $validasi = $request->validate(
            ['name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            ]
        );
        $user = new User();
        $user->name = $validasi['name'];
        $user->email = $validasi['email'];
        $user->password = Hash::make($validasi['password']); //tidak aman
        $user->save();

        return ['status' => true, 'message' => 'Registrasi berhasil!'];
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::where('email', $request->email)->first();
        if(!$user || ! Hash::check($request->password, $user->password) ){
            return ['status' => false,
                    'message' => "Username atau Password anda salah"];
        }

        $token = $user->createToken("MyAPP")->plainTextToken;
        return [
            'status' =>true,
            'token' => $token,
            'data' =>$user
        ];
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    }
}
