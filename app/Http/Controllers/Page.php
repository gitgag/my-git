<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\ComInfo;
use App\Models\PartnerInfo;
use App\Models\ServiceList;
use App\Models\ServiceImg;

class Page extends Controller
{
    //

    public function homedata()
    {
        return view('landing', [
            'home_page' => Homepage::all(),
            'info' => ComInfo::all(),
            'partnerinfo' => PartnerInfo::all(),
            'servicelist' => ServiceList::all(),
            'serviceicon' => ServiceImg::all()
            
        ]);
        
    }

    public function aboutdata()
    {

        return view('about',[
            'info' => ComInfo::all(),
            'home_page' => Homepage::all()
        ]);
    }


}
