<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:user_show', ['only' => 'index']);
        $this->middleware('permission:user_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user_update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user_detail', ['only' => 'show']);
        $this->middleware('permission:user_delete', ['only' => 'destroy']);
    }

    private $perPage = 15;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = [];
        if($request->get('keyword')){
            $users = User::search($request->keyword)->paginate($this->perPage);
        }
        else
        {
            $users = User::paginate($this->perPage);
        }
        return view('users.index',[
            'users' => $users->appends(['keyword' => $request->keyword]),
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
        $request['role'] = Role::select('id', 'name')->find($request->role);
        return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
    }

    DB::beginTransaction();
    try {
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $role = Role::find($request->role);
        $user->assignRole($role->name);
        Alert::success(
            trans('users.alert.create.title'),
            trans('users.alert.create.message.success'),
        );
        return redirect()->route('users.index');
    } catch (\Throwable $th) {
        DB::rollBack();
        Alert::error(
            trans('users.alert.create.title'),
            trans('users.alert.create.message.error', ['error' => $th->getMessage()])
        );
        $request['role'] = Role::select('id', 'name')->find($request->role);
        return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
    }
    finally{
        DB::commit();
    }
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
        // Select the role you want to display, such as the first role
        $roleSelected = $user->roles->first();

        // dd($roleSelected); // Debugging statement

        return view('users.edit', [
            'user' => $user,
            'roleSelected' => $roleSelected,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(),[
            "role" => "required",
        ],
        [],
        $this->attributes()
    );

    if ($validator->fails()) {
        $request['role'] = Role::select('id', 'name')->find($request->role);
        return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
    }

    DB::beginTransaction();
    try {
        $role = Role::find($request->role);
        $user->syncRoles($role->name);
        Alert::success(
            trans('users.alert.update.title'),
            trans('users.alert.update.message.success'),
        );
        return redirect()->route('users.index');
    } catch (\Throwable $th) {
        DB::rollBack();
        Alert::error(
            trans('users.alert.update.title'),
            trans('users.alert.update.message.error', ['error' => $th->getMessage()])
        );
        $request['role'] = Role::select('id', 'name')->find($request->role);
        return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
    }
    finally{
        DB::commit();
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
    try {
        $user->removeRole($user->roles->first());
        $user->delete();
        Alert::success(
            trans('users.alert.delete.title'),
            trans('users.alert.delete.message.success'),
        );
    } catch (\Throwable $th) {
        DB::rollBack();
        Alert::error(
            trans('users.alert.delete.title'),
            trans('users.alert.delete.message.error', ['error' => $th->getMessage()])
        );
    }
    finally{
        DB::commit();
        return redirect()->back();
    }
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
