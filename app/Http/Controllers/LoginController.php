<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class LoginController extends BaseController
{
    public function login(Request $request){
        $user = DB::table('users')->where(['email' => $request->email])->get();
        if($user){
            foreach($user as $u){
                $s = session('id', $u->id);
                echo "<script>alert('Login Berhasil');window.location='". route('admin')."'</script>";
            }
        }else{

        }
    }
}
