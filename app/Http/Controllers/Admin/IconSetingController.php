<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\IconSetting;
use Carbon\Carbon;
use DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IconSetingController extends Controller
{

    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('admin.icon_setting');
        }


        // if ($request->ajax() && $request->isMethod('post')) {
        // $data = About::select('*')->get()->toArray();

        // return Datatables::of($data)
        // ->addIndexColumn()

        // ->rawColumns([])
        // ->make(true);

        // }
    }

    public function add(Request $request)
    {
        $post = $request->all();
        // echo '<pre>';
        // print_r($post);
        // die;
        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Update failed!';

        $validation = Validator::make($request->all(), [
            'phone'  => 'required',
            'whatsApp' => 'required',
            'location' => 'required',
            'mail'     => 'required',
            'website'  => 'required',
            'phoneStatus' => 'required',
            'whatsAppStatus' => 'required',
            'locationStatus' => 'required',
            'mailStatus' => 'required',
            'websiteStatus' => 'required',
        ]);

        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        $existingRecord = IconSetting::updateOrCreate([]);
        $existingRecord->phone = ($post['phoneStatus'] == 1 && isset($post['phone'])) ? $post['phone'] : ''; 
        $existingRecord->whatsapp = ($post['whatsAppStatus'] == 1 && isset($post['whatsApp'])) ? $post['whatsApp'] : ''; 
        $existingRecord->location = ($post['locationStatus'] == 1 && isset($post['location'])) ? $post['location'] : '';
        $existingRecord->mail = ($post['mailStatus'] == 1 && isset($post['mail'])) ? $post['mail'] : '';
        $existingRecord->website = ($post['websiteStatus'] == 1 && isset($post['website'])) ? $post['website'] : '';
        $existingRecord->phone_status = isset($post['phoneStatus']) ? $post['phoneStatus'] : '';
        $existingRecord->whatsapp_status = isset($post['whatsAppStatus']) ? $post['whatsAppStatus'] : '';
        $existingRecord->location_status = isset($post['locationStatus']) ? $post['locationStatus'] : '';
        $existingRecord->mail_status = isset($post['mailStatus']) ? $post['mailStatus'] : '';
        $existingRecord->website_status = isset($post['websiteStatus']) ? $post['websiteStatus'] : '';
        $existingRecord->created_at = Carbon::now();
        $existingRecord->save();

        if (isset($existingRecord->id)) {
            $response['status'] = 1;
            $response['id'] = isset($existingRecord->id) ? $existingRecord->id : '';
            $response['msg'] = 'Setting Applied.';
        }

        echo json_encode($response);
        exit();
    }

    public function fill(Request $request){
        $icon = array(); 

        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Not Found!';

        $icon = IconSetting::select('*')->get()->first();
        
        if(isset($icon) && !empty($icon)){
            $response['status'] = 1;
            $response['data'] = $icon;
            $response['msg'] = 'Record Found!';
        }else{
            $response['status'] = 0;
            $response['msg'] = 'Record Not Found!';
        }


        echo json_encode($response);
        exit();
    }
}
