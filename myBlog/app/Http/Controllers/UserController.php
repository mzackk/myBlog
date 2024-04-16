<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index',[
            'users' => User::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "name" => "required|string|max:30",
            "role" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6|confirmed"
        ],
        [],
        $this->attributes()
    );
    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
    }

    dd("ETST", $request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    private function attributes()
    {
        return[
            "name" => trans('users.form_control.input.name.attribute'),
            "role" => trans('users.form_control.select.role.attribute'),
            "email" => trans('users.form_control.input.email.attribute'),
            "password" => trans('users.form_control.input.password.attribute'),
        ];
    }
}
