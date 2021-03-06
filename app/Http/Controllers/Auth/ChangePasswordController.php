<?php
namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ChangePasswordController extends Controller
{
    public function index(){
          return view('auth.passwords.changepassword');
    }
    public function changepassword(Request $request){
      $validatedData = $request->validate([
        'oldpassword'=>'required',
        'password' => 'required|confirmed',
      ]);
      $hashedPassword = Auth::user()->password;
      if (Hash::check($request->oldpassword,$hashedPassword)) {
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect()->route('login');
      }
      else{
        return redirect()->back();
      }
      }
    }
