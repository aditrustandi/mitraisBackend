<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    

    public function registerUser(Request $request)
    {
        $data = json_decode($request->getContent(), true)['data'];

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
        ]);

        if ($user->save()) {
            $status = true;
            $message = 'Success create user';
        }else{
            $status = false;
            $message = 'Fail create user';
        }

        return $this->ajaxResponse($status, $message, $user);
    }

    private function ajaxResponse($status, $message, $data)
    {
        return [
            'status'=>$status,
            'message'=>$message,
            'data'=>$data
        ];
    }
}
