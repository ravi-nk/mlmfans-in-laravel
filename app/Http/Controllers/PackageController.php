<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;

class PackageController extends Controller
{
    
    public function add(){
        return view('admin.addPackage');
    }
    public function store(Request $request){
        $package = new package();
        $package->name = $request->name;
        $package->amount = $request->amount;
        $package->color = $request->color;
        $package->min_days  = $request->min_days;
        $package->max_days  = $request->max_days;
        $package->max_ads = $request->max_ads;
        $package->size = $request->size;
        $package->currency = $request->currency;
        $package->description = $request->description;
        $package->save();
        return redirect()->route('admin.addPackage');


    }
    }

