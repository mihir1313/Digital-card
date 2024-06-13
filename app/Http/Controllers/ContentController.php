<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Address;
use App\Models\Advocate;
use App\Models\Category;
use App\Models\FirmDetail;
use App\Models\FirmImg;
use App\Models\IconSetting;
use App\Models\MainDetail;
use App\Models\Qr;
use App\Models\Review;

// use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
       
        $mainDetails = array();
        $about = array();
        $categories = array();
        $advocates = array();
        $reviews = array();
        $qr = array();
        $address = array();
        $firmImg = array();
        $firmDetail = array();
        $icon = array();

        $mainDetails = MainDetail::select('phone','email','address')->get()->toArray();
        $about = About::select('description')->get()->toArray();
        $categories = Category::select('category')->get()->toArray();
        $advocates = Advocate::select('name','position','qualification','img','phone','sequence')->orderBy('sequence')->where('status','=','1')->get()->toArray();
        $reviews = Review::select('name','occupation','stars','description')->get()->toArray();
        $qr = Qr::select('img')->get()->first();
        $address = Address::select('description','location')->get()->toArray();
        $firmImg = FirmImg::select('img')->get()->first();
        $firmDetail = FirmDetail::select('firm_name','firm_type','description')->get()->first();
        $icon = IconSetting::select('phone','whatsapp','location','mail','website')->get()->first();
    //   echo '<pre>';
    //   print_r($icon->phone);
    //   die;
        return view('layouts.content')->with(compact('mainDetails','about','categories','advocates','reviews','qr','address','firmImg','firmDetail','icon'));
    }
   
}
