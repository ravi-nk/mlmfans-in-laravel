<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LevelPlan;

class LevelPlanController extends Controller
{
    public function index(){
        $plans = LevelPlan::all();
        return view('admin.levelPlansList',compact('plans'));
    }
    public function add(){
        $plan = LevelPlan::latest('level')->first();
        return view("admin.add_levelPlan",compact('plan'));
    }
    public function store(Request $request){
        $plans = new LevelPlan();
        $plans->level = $request->level;
        $plans->percentage = $request->per;
        $plans->direct =$request->direct;
        $plans->save();
        return redirect()->route('admin.planList');
    }
    public function edit($id){
        $plan = LevelPlan::findOrFail($id);
        return view('admin.edit_levelPlan',compact('plan'));
    }
    public function update(Request $request, $id){
            $plan  = LevelPlan::findOrFail($id);
            $plan->level = $request->level;
            $plan->percentage = $request->per;
            $plan->direct = $request->direct;
            $plan->save();
            return redirect()->route('admin.planList');
    }
    public function delete($id){
        $plan = LevelPlan::findOrFail($id);
        $plan->delete();
        return redirect()->route('admin.planList');
    }
}
