<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addbanner;

class AddbannerController extends Controller
{
    public function siteBanner() {
        return view('admin.bannerAdd');
    }
    public function bannerimg(Request $request) {

        $request->validate([
            "image" => "required",
        ]);
    
        $banner = new Addbanner();
        $banner->title = $request->title;
        $banner->description = $request->description;

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/uploads/banners'),$filename);
            $banner->image = $filename;
        }
        $result = $banner->save();
        return redirect()->route('admin.bannerList');

    }

    public function bannerlist() {
        $allbanners = Addbanner::orderBy('id','desc')->get();
            return view('admin.bannerList',compact('allbanners'));
    }

    public function editBanner(Request $request,$id){
        $b = Addbanner::findOrFail($id);
        return view('admin.bannerEdit', compact('b'));
     }
    public function bannerUpdate(Request $request,$id) {
        $banner = Addbanner::findOrFail($id);
        
        $banner->title = $request->title;
        $banner->description = $request->description;
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/uploads/banners'),$filename);
            $banner->image = $filename;
        }
        $banner->status = $request->status;
        $banner->save();
        return redirect()->route('admin.bannerList'); 
    }
    public function deletebanner(Request $request,$id){
        $bnr = Addbanner::findOrFail($id);
        $bnr->delete();
         return redirect('/admin/bannerList');
     }
    

     public function updateStatus(Request $request){

        $status = Addbanner::findOrFail($request->id);
        $status->status = $request->status;
        $status->save();
    }

}
