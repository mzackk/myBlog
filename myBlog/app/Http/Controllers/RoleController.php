<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('roles.index',[
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create',[
            'authorities' => config('permission.authorities'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => "required|string|max:50|unique:roles,name",
                'permissions' => "required",

            ],
            [],
            $this->attributes()
        );

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try{
            $role = Role::create(['name' => $request->name]);
            $role->givePermissionTo($request->permissions);
            Alert::success(
                trans('roles.alert.create.title'),
                trans('roles.alert.create.message.success'),
            );
            return redirect()->route('roles.index');
        } catch(\Throwable $th){
            DB::rollback();
            Alert::error(
                trans('roles.alert.create.title'),
                trans('roles.alert.create.message.error', ['error' => $th->getMessage()]),
            );
        }finally{
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.detail', [
            'role' => $role,
            'authorities' => config('permission.authorities'),
            'rolePermissions' => $role->permissions->pluck('name')->toArray()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit',[
            'role' => $role,
            'authorities' => config('permission.authorities'),
            'permissionChecked' => $role->permissions->pluck('name')->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => "required|string|max:50|unique:roles,name," . $role->id,
                'permissions' => "required",

            ],
            [],
            $this->attributes()
        );

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        
        DB::beginTransaction();
        try{
            $role->name = $request->name;
            $role->syncPermissions($request->permissions);
            $role->save();
            Alert::success(
                trans('roles.alert.create.title'),
                trans('roles.alert.create.message.success'),
            );
            return redirect()->route('roles.index');
        } catch(\Throwable $th){
            DB::rollback();
            Alert::error(
                trans('roles.alert.create.title'),
                trans('roles.alert.create.message.error', ['error' => $th->getMessage()]),
            );
        }finally{
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        dd($role);
    }

    private function attributes()
    {
        return [
            'name' => trans('roles.form_control.input.name.attribute'),
            'permissions' => trans('roles.form_control.input.permission.attribute')
        ];
    }
}
