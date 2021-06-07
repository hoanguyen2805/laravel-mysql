<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use File;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     * Hoa
     * Created at 03-06-2021 14h20
     * get list users and search
     *
     */
    public function getUsers(Request $request)
    {
        $user = Auth::user();
        if ($user->can('viewAny', User::class)) {
            $key = trim($request->input('key'));
            if ($key != "") {
                $users = User::where("username", "like", "%$key%")->orWhere("email", "like", "%$key%")->paginate(5);
                $users->appends(['key' => $key]);
            } else {
                $users = User::paginate(5);
            }
            return view('manage_user', ['users' => $users]);
        } else {
            return redirect('/home');
        }
    }

    /**
     *
     * Hoa
     * Created at 03-06-2021 16h00
     * delete user by id
     *
     */
    public function deleteUser($id)
    {
        $user = Auth::user();
        if ($user->can('delete', User::class)) {
            $user = User::find($id);
            if ($user) {
                if (File::exists(public_path($user->avatar))) {
                    File::delete(public_path($user->avatar));
                } else {
                    echo('File does not exists.');
                }
                User::destroy($id);
                return redirect()->back()->with('message', 'Deleted Successfully');
            } else {
                return redirect()->back()->with('error', 'User does not exist');
            }
        } else {
            return redirect('/home');
        }

    }
}
