<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SiteSettingController extends Controller
{
    public function index(SiteSetting $sitesetting){
        $sitesetting=$sitesetting->all();
        return view('admin.sitesetting.index',compact('sitesetting'));
    }

    public function store(Request $request,SiteSetting $sitesetting){
        foreach (array_except($request->toArray() ,['_token','submit'])as $key => $req){
            $sitesettingupdate=$sitesetting->where('namesetting',$key)->get()[0];
            $sitesettingupdate->fill(['value'=>$req])->save();
        }
        return Redirect::back();
    }
}
