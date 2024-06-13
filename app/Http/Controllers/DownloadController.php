<?php

namespace App\Http\Controllers;
use PDF;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Advocate;
use App\Models\Category;
use App\Models\MainDetail;
use App\Models\Review;

// use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(){
      
        $mainDetails = array();
        $about = array();
        $categories = array();
        $advocates = array();
        $reviews = array();

        $mainDetails = MainDetail::select('*')->get()->toArray();
        $about = About::select('description')->get()->toArray();
        $categories = Category::select('*')->get()->toArray();
        $advocates = Advocate::select('*')->where('status','=','1')->get()->toArray();
        $reviews = Review::select('*')->get()->toArray();

        $data = array();
        $data['mainDetails'] = $mainDetails;
        $data['about'] = $about;
        $data['categories'] = $categories;
        $data['advocates'] = $advocates;
        $data['reviews'] = $reviews;
        // echo '<pre>';
        // print_r($data);
        // die;

        $pdf = PDF::loadView('layouts.demo', $data);

        $customPaper = array(0,0,380,380);

        $pdf->setPaper($customPaper);
        
        return $pdf->download('NM_Associates.pdf');
    }
   
}

