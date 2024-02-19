<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAddresses;

use App\Models\UserProfile;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function registerstore(Request $req)
    {
        //  dd($req);
        $users = User::where('email', $req->email)->get();
        if (count($users) == 1) {
            return redirect('register')->with('successs', 'Email has already been taken');
        } else {

            $req->validate([
                'name' => 'required|min:1|max:15',
                'email' => 'required|unique:users,email|max:50',
                'password' => 'required|min:5|max:8',
            ]);
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            if ($user->save()) {
                return redirect('login')->with('successs', 'Congratulations Your Account Is Ready');
            }
        }
    }

    public function login()
    {

        return view('login');
    }



    public function loginUser(Request $req)
    {

        $email = $req->email;
        $password = $req->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {


            // if (!session()->has('url.intended')) {
            //     return  redirect('/')(session()->get('url.intended'));
            // }

            $user = User::where('email', $email)->first();
            // dd($user->role_id);
            session()->put('id', $user->id);
            session()->put('username', $user->name);
            session()->put('email', $user->email);


            return redirect('admin/dashboard');
        } else {
            return redirect('login')->with('error', 'Email/Password Is Incorrect');
        }
    }

    public function profile()
    {

        if (session()->has('id')) {
            $user = User::find(session()->get('id'));
            $userprofile = UserProfile::find(session()->get('id'));

            return view('profile', compact('user','userprofile'));
        }
        return redirect('login');
    }


    public function updateuser(request $req)
    {
        // dd($req);

        $user = User::find(session()->get('id'));

        $Userprofile = new UserProfile ;
        // dd($user);
        $Userprofile->user_id =  $user->id;
        $Userprofile->father_name = $req->father_name;
        $Userprofile->mother_name = $req->mother_name;
        $Userprofile->status = 1;
        if ($Userprofile->save()) {
            return redirect('admin/dashboard')->with('successs', 'Your Profile is Updated');
        }
    }


    public function useraddressview(){
        $user = User::find(session()->get('id'));

        $userprofile = UserAddresses::find(session()->get('id'));

        return view('useraddress',compact('userprofile','user'));

    }

    public function useraddress(request $req)
    {
        // dd($req);

        $user = User::find(session()->get('id'));
        $userprofile = UserProfile::find(session()->get('id'));

        $Useradreess = new UserAddresses;
        // dd($user);
        $Useradreess->user_id =  $user->id;
        $Useradreess->address1 = $req->address1;
        $Useradreess->address2 = $req->address2;
        $Useradreess->pincode = $req->pincode;
        $Useradreess->status = 1;
        if ($Useradreess->save()) {
            return redirect('admin/dashboard')->with('successs', 'Your Profile is Updated');
        }
    }

    public function useraddresslist(request $req)
    {
        // dd($req);
        $user = User::find(session()->get('id'));
        $Useraddresses = UserAddresses::find(session()->get('id'));
        $useradrees = $user->UserAddresses->address1;
        dd($useradrees);
        return view('useraddresslist',compact('useradrees'));


    }

    public function logout()
    {
        // dd('hii');
        session()->forget('id');
        session()->forget('username');

        return redirect('/login');
    }


}
