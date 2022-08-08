<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ipinfo\ipinfo\IPinfo;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$ip = $request->ip(); //Dynamic IP address
        $ip = '210.128.139.234'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        //dd($ip);

        return view('user', compact('currentUserInfo'));
    }

    public function ipInfo(Request $request)
    {
        $client = new IPinfo();
        //$ip_address = $request->ipinfo->ip; //dynamic ip
        $ip_address = '210.128.139.234';
        $details = $client->getDetails($ip_address);
        //dd($details->all);
        return view('user2', compact('details'));
    }
}
