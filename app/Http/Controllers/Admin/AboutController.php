<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\About;
use DataTables;
// namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
   
    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('admin.about');  
        }

        if ($request->ajax() && $request->isMethod('post')) {
        $data = About::select('*')->get()->toArray();

        return Datatables::of($data)
        ->addIndexColumn()
        
        ->rawColumns([])
        ->make(true);

        }
    }

    public function addAbout(Request $request){

        $post = $request->all();
        // about

        $response = array();
        $response['status'] = 0; 
        $response['msg'] = 'Record Update failed!';

        $validation = Validator::make($request->all(), [
            'about'             => 'required',
        ]);
        
        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        $existingRecord = About::firstOrNew([]);

        $existingRecord->description = isset($post['about']) ? $post['about'] : '';
     
        $existingRecord->save();
     
        if(isset($existingRecord->id)){
            $response['status'] = 1;
            $response['msg'] = 'Record Updated successfully.';
        }

        echo json_encode($response);
        exit();
    }

}
