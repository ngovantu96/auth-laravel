<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user){
        $this->user = $user;
        // $this->middleware("auth");
    }

    public function index(){
        $users =$this->user::all();
        $roles = Role::all();
        return view('home.user.list',['users'=>$users,'roles'=>$roles]);
    }

    public function create(){
        $roles = Role::all();
        return view('home.user.create',compact('roles'));
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        // $user->roles()->attach($request->role);
        return redirect()->route('user.list')->with('success','Thêm mới thành công.');
    }

    public function edit($id){
        $user = $this->user::findOrFail($id);
        $roles = Role::all();
        // $userOfRole = DB::table('role_user')->where('user_id', $id)->pluck('role_id');
        return view('home.user.edit',compact('user','roles'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        DB::table('user')->where('id',$id)->delete();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->role_id = $request->role;

        $user->save();

        // $user->roles()->attach($request->role);
         return redirect()->route('user.list')->with('info','Cập nhật thành công.');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.list')->with('danger','Xóa thành công.');
    }

    // public function view($id){
    //     $user = User::find($id);

    // }

    public function profile(){
        // $user = User::findOrFail($id);
        return view('home.user.profile');
    }

    public function editProfile(Request $request){
        // $this->validate($request,[
        //     'name'=>'required',
        //     'phone'=>'required',
        //     'email'=>'required|email|unique:user,email,'.$user->id
        // ]);
        // $user->update($request->all());

        return redirect()->back()->with('info','Chỉnh sửa thành công.');
    }
}
