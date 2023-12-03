<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use Illuminate\Support\Facades\DB;
use App\Models\ComInfo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UpdateData extends Controller
{
    //
    public function showdata()
    {
        if (Auth::check()) {
          return view('update.FormData', [
                'home_page' => Homepage::all(),
                'com_info' => ComInfo::all()
               
    
    
            ]);
       }

        return redirect()->route('login-page')->withSuccess('not authorized');
 
    }

    public function storedata(Request $request)
    {
     // dd($request->all());

        $banner = $request->input('banner_text');
        $vtitle = $request->input('vision_title');
        $vsummary = $request->input('vistion_summary');
        $mtitle = $request->input('mission_title');
        $msummary = $request->input('mission_txt');
        $stitle = $request->input('service_title');
        $cname = $request->input('com_name');
        $cdesc = $request->input('com_desc');
        $caddress= $request->input('com_add');
        $cphone= $request->input('com_phone');
        $cemail= $request->input('com_email');
        


       $imgFile= $request->input('main_logo');
       $imgName = time().'.'. $imgFile;
        dd ($imgName);

       /* $fields = $request->validate ([
            'vision_title' => 'required',
            'vistion_summary' => 'required',
            'banner_text'=>'required'
        ]);  */

        DB::update('update homepage h, company_info c set 
        h.logo_path = ?,
        h.vision_title = ?, h.vistion_summary = ?, h.banner_text = ?, h.mission_title=?, 
        h.mission_summary=?, h.service_title=?, c.company_title=?, c.company_desc=?, c.address=?,
        c.phone=?, c.email=?
        where h.id = 1',
        [$imgName, $vtitle, $vsummary, $banner, $mtitle, $msummary, $stitle, $cname, $cdesc, $caddress, $cphone, $cemail]);
    
       return redirect()->route('update-page')->with('status','updated');
    }
}
