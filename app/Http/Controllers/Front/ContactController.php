<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Setting;

class ContactController extends Controller
{
    //
    public function index(){
        $data['setting'] = Setting::first();
        return view('Front.contact.index')->with($data);
    }
    public function test(){
        return view('Front.product');
    }
    public function test2(){
        return view('Front.user');
    }
}
