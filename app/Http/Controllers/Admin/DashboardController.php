<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    
    public function users(){
        
        $users=User::where('role_as','0')->get();
        return view('admin.users.index',compact('users'));
    }

    public function admins(){
        echo("<script>console.log('PHP: " . "sha" . "');</script>");
        $admins=User::where('role_as','1')->get();
        return view('admin.users.admin',compact('admins'));
    }

    public function viewusers($id){
        $users=User::find($id);
        return view('admin.users.view',compact('users'));
    }
}
