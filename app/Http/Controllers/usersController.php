<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\wallet;
use App\sp_downline;
use Auth;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
class usersController extends Controller

{
    // Register function
            public function registerIndex() {
                return view('register');
            }
            public function checkSp() {
                $id = $_GET['id'];
                $sponsor = User::where('UID', $id)->get();
                $wordCount = $sponsor->count();
                return response()->json($wordCount, 200);
            }
            public function register(Request $request) {

                $sponsor = User::where('UID', $request->spid)->get();
               
                if($sponsor->count() > 0) {
                $sponsor =  $sponsor[0];

                $user = User::where('email',$request->email)->first();
                if(isset($user->id)) {
                    return response()->json('User already exits',401);
                }
               
                if($request->cnf_password == $request->password) {
                // code for get downline
                    $downline = User::where('id', $sponsor->id)->latest('downline')->first();
                    $userdownline = "";
                    if($downline == null) {
                       $userdownline = "-";
                    } else {
                       $userdownline = $downline->downline;
                    }
                //End code for get downline

                    $user = new User();
                    $user->spid = $sponsor->id;  //convert UID to id for sponsor
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->mobile = $request->mobile;
                    $user->is_showlist = $request->is_showlist;
                    $user->address = $request->address;
                    $user->role = "user";
                    $user->downline = $userdownline.$sponsor->id."-";

                    if ($file = $request->hasFile('image')) {
                        $file = $request->file('image');
                        $filename = $file->getClientOriginalName();
                        $file->move(public_path('/uploads/user'),$filename);
                        $user->img = $filename;
                    }
                    $user->password = Hash::make($request->password);
                    $user->save();
                // update UID a user with Random number 
                    $length = 5;
                    $pool = '0123456789';
                    $numberid =  substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
                    $checkuid = User::where('UID', "WS".$numberid)->get();
                    if($checkuid->count() == 0) {
                        $user_uid = User::findOrFail($user->id);
                        $user_uid->UID="WS".$numberid;
                        $user_uid->save();
                    } else {
                        return redirect('/register')->with('error', 'User UID already Exist');
                    }

                    $u_wallet = new wallet();
                    $u_wallet->userid=$user->id;
                    $u_wallet->amount=5;
                    $u_wallet->status=1; //credit
                    $u_wallet->from_uid=$user->spid;
                    $u_wallet->save();

                    $s_wallet = new wallet();
                    $s_wallet->userid=$user->spid;
                    $s_wallet->amount=10;
                    $s_wallet->status=1; //credit
                    $s_wallet->from_uid=$user->id;
                    $s_wallet->save();
                
             }
                Auth::login($user);
                return redirect('/login');
                } else {
                    return redirect('/register')->with('error', 'Sponsor not Valid!');
                
                }
            
            }
        // End Register function

        // Login Function
                public function loginIndex() {
                    if(Auth::check()) {
                        return redirect('/');
                    }
                    return view('login');
                }
                public function login(Request $req) {
                    User::where('email' ,$req->username)->orWhere('mobile', $req->username)->where('password',  $req->password)->get();
                        if(auth()->attempt(array('email' => $req->username, 'password' => $req->password,'is_active'=>1)))
                        {
                            if (auth()->user()->is_admin == 1) {
                                return redirect('admin/home');
                            } else {
                                return redirect('/');
                            }
                        } else  if(auth()->attempt(array('mobile' => $req->username, 'password' => $req->password)))
                        {
                            if (auth()->user()->is_admin == 1) {
                                return redirect('admin/home');
                            } else{
                                return redirect('/');
                            }
                        }
                        else  if(auth()->attempt(array('UID' => $req->username, 'password' => $req->password)))
                        {
                            if (auth()->user()->is_admin == 1) {
                                return redirect('admin/home');
                            } else{
                                return redirect('/');
                            }
                        }
                        
                        else {
                            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
                        }
                 }
        // End Login Function

        // Logout Function
            public function logout(){
                Auth::logout();
                    return redirect('/login');
            }
       // End Logout Function

    //    all user get and show in front of site
    public function memberUser() {
        $activeuser = User::where('is_showlist', 1)->orderBy('id','desc')->paginate(15);
            return view('user.member',compact('activeuser'));
    }
    //    adminpanel data
        public function adminHome() {
            return view('admin.Home');
        }
        public function userlist() {
            $alluser = User::where('is_admin', null)->orderBy('id','desc')->get();
                return view('admin.UserList',compact('alluser'));
        }
        public function edituser(Request $request,$id){
               $user = User::findOrFail($id);
               return view('admin.Edituser', compact('user'));
        }

        public function updateuser(Request $request,$id) {
            $user = User::findOrFail($id);

               $user->name = $request->name;
                $user->email = $request->email;
                $user->mobile = $request->mobile;
                $user->address = $request->address;
                $user->save();
               return redirect()->route('admin.userlist');
        }

        public function deleteuser(Request $request,$id){
           $user = User::findOrFail($id);
           $user->delete();
            return redirect('/admin/UserList');
        }
        // profile page
        public function showUserProfile(Request $request,$id){
            $user = User::findOrFail($id);
            return view('user.profile', compact('user'));
         }
       

       public function updateStatus(Request $request){
           $status = User::findOrFail($request->id);
           $status->is_active = $request->status;
           $status->save();
       }

}
