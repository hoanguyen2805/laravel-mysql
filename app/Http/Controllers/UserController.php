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
            }
            return back();
        } else {
            return redirect('/home');
        }

    }
}
