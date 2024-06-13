<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainDetail;
use Illuminate\Support\Facades\Validator;
// namespace App\Http\Controllers\admin;
use DataTables;
use Illuminate\Http\Request;

class MainDetailController extends Controller
{

    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('admin.maindetail');
        }
        if ($request->ajax() && $request->isMethod('post')) {
            $data = MainDetail::select('*')->get()->toArray();

            return Datatables::of($data)
            ->addIndexColumn()
            
            ->rawColumns([])
            ->make(true);
    
        }
    }

    public function addDetails(Request $request)
    {

        $post = $request->all();

        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Update failed!';

        $validation = Validator::make($request->all(), [
            'phone'             => 'required',
            'email'             => 'required',
            'address'             => 'required',
        ]);

        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        $existingRecord = MainDetail::firstOrNew([]);
        $existingRecord->phone = isset($post['phone']) ? $post['phone'] : '';
        $existingRecord->email = isset($post['email']) ? $post['email'] : '';
        $existingRecord->address = isset($post['address']) ? $post['address'] : '';
        $existingRecord->save();

        if (isset($existingRecord->id)) {
            $response['status'] = 1;
            $response['msg'] = 'Record Updated successfully.';
        }

        echo json_encode($response);
        exit();
    }
}
