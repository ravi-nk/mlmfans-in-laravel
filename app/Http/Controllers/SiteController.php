<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addbanner;
use App\userpost;
use Auth;
use App\User;
use App\sp_downline;
use App\setting;
use DB;
use App\package;
use App\post;
use App\bookingAd;

class SiteController extends Controller
{
    public function bannerlist() {
        $bannerAll = Addbanner::orderBy('id','desc')->get();
        $postAll = userpost::orderBy('id','desc')->get();
        $topten = DB::select('select u_user.*, count(s_user.id) as counter from users as s_user inner join users as u_user on u_user.id = s_user.spid group by s_user.spid order by counter desc limit 11');

        return view('user.index',compact('bannerAll', 'postAll', 'topten'));
    }

     //  user post
     public function userspost() {
        return view('user.addpost');
    }
     public function AddPost(Request $request) {
        $request->validate([
            "image" => "required",
        ]);
        $mypost = new userpost();
        $mypost->title = $request->title;
        $mypost->subtitle = $request->subtitle;
        $mypost->description = $request->description;
        $mypost->url = $request->url;

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/uploads/post'),$filename);
            $mypost->image = $filename;
        }
        $result = $mypost->save();
        return redirect()->route('user.addpost');
    }

    public function getdownline() {
            $dwonlineUser = User::where('downline', 'like', '%-' . Auth::user()->id . '-%')->get();
            if($dwonlineUser != '') { 
                $results = $dwonlineUser;
                 return view('user.downline',compact('results'));
            } else {
                return redirect('user/downline')->with('error', 'Downline Not Found');
            }
        }

        public function getdirectuser() {
            $directUser = User::where('spid',  Auth::user()->id )->get();
            // print_r($directUser);die;
            if($directUser != '') { 
                $results = $directUser;
                 return view('user.direct',compact('results'));
            } else {
                return redirect('user/direct')->with('error', 'Downline Not Found');
            }
        }

       
    // clasified ads page
        public function getAdds() {
            $ads =  DB::select('SELECT booking_ads.*,packages.* from booking_ads INNER JOIN packages on booking_ads.package_id = packages.id where booking_ads.package_id = packages.id');

            return view('user.clasifiedAd',compact('ads'));
        }
        
        public function getPackage() {
            $allpackage = package::all();
            return view('user.adsPackage',compact('allpackage'));
        }

        public function getAdsBooking(Request $request,$id) {
            $ads = package::findOrFail($id);
            return view('user.adsBooking',compact('ads'));
        }

        public function addBook(Request $request) {
           
           $year = $request->month;
           $year.= "-".$request->year;
           $day = $request->days;

           $myimage  = "";
           if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/uploads/ads'),$filename);
            $myimage = $filename;
         }
            foreach($day as $d) {
                $book = new bookingAd();
                $book->date = $d."-".$year;
                $book->package_id = $request->packid;
                $book->amount = $request->amount;
                $book->image = $myimage;
                $book->url = $request->url;
                $book->save();
            }
            return redirect()->back()->with('message', 'Congratulations !Your Ad successfully Booked');
        }


    // public function getdownline() {
    //     $dwonlineUser = sp_downline::where('downline', 'like', '%-' . Auth::user()->id . '-%')->get();
        
    //     if($dwonlineUser != '') {
    //     $alluser = [];
    //     foreach ($dwonlineUser as $inf) {
    //         $alluser=array_merge($alluser,explode("-",$inf->downline));
    //     }
    //     $alluser=array_filter(array_unique($alluser));
    //     print_r($alluser);die;
    //     $condtion = [];
    //     if($alluser != '') {
    //         $condtion[] = " id='" . implode("' or id='", $alluser) . "'";
    //         if (count($condtion) > 0)
    //             $condtion = 'where ' . implode(" and ", $condtion);
    //         else
    //             $condtion = '';
    //      $results = DB::select('select * from users '. $condtion );
    //          return view('user.downline',compact('results'));
    //     } 
            
    //     }
    // }
   

    public function get_userPost(){
        $posts = post::orderBy('id','desc')->get();
        
        return view('user.userpost',compact('posts'));
    } 
    
    public function add_userPost(){
        return view('user.add_userpost');
    }

    public function store_userPost(Request $request){
        $post = new post();
        $post->title = $request->title;
        $post->description = $request->description;
        
        if($request->hasFile('image')){
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        $file->move(public_path('/uploads/userPosts'),$image);
        $post->image = $image;
        }
        $post->user_id = $request->user_id;
        $post->save();
        return redirect()->route('user.userPost');
    }
  
    
}
