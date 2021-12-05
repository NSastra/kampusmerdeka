<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\SUpport\Facades\Auth;
use Validator;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string'
        ];

        $messages = [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.string' => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back->withErrors($validator)->withInput($request->all);
        }
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            // 'level' => 'admin',
        ];
        // $data2 = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        //     // 'level' => 'kaprodi',
        // ];
        // $data3 = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        //     // 'level' => 'mahasiswa',
        // ];
        
        Auth::attempt($data);
        // Auth::attempt($data2);
        // Auth::attempt($data3);
        
        if (Auth::check($data)){
            return redirect('/admin/index');
        } elseif (Auth::check($data)){
            return redirect('/kaprodi/index');
        } elseif (Auth::check($data)){
            return redirect('/mahasiswa/index');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/mahasiswa/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
