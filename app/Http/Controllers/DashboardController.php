<?php

namespace App\Http\Controllers;


use App\Models\Cctv;

use App\Models\Umpc;

use App\Models\User;
use App\Models\Wifi;
use App\Models\Wireless;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;


class DashboardController extends Controller
{
    public function index()
    {

        $umpc = Umpc::all();
        $cctv = Cctv::all();
        $wifi = Wifi::all();
        $wireless = Wireless::all();
        return view('admin.dashboard',[
            'umpc' => $umpc,
            'cctv' => $cctv,
            'wifi' => $wifi,
            'wireless' => $wireless,

        ]);
    }

    public function home()
    {
        $umpc = Umpc::all();
        $cctv = Cctv::all();
        $wifi = Wifi::all();
        $wireless = Wireless::all();
        return view('admin.home',[
            'umpc' => $umpc,
            'cctv' => $cctv,
            'wifi' => $wifi,
            'wireless' => $wireless,

        ]);
       
    }


}
