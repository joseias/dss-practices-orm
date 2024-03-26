<?php

namespace App\Http\Controllers;

use Exception;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Phone;

class UserController extends Controller
{

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $uphone = $request->phone;

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = 'xxx.yyy';
        $user->save();


        $phone = new Phone();

        $phone->country = '34';
        $phone->number = $uphone;

        $phone->user()->associate($user);
        $phone->save();

        return view('user.profile', ['user' => $user]);
    }

    public function paginate(Request $request){
        $users = User::paginate(5);
		return view('user.paginate', ['users' => $users]);
    }

}
