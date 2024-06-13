<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FirmDetail;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FirmDetailController extends Controller
{
   public function index(Request $request){
   
    if (!$request->isMethod('post')) {
        return view('admin.firmdetail');  
    }
    
    if ($request->ajax() && $request->isMethod('post')) {
        
        $data = FirmDetail::select('*')->get()->toArray();

        return Datatables::of($data)
        ->addIndexColumn()
        
        ->rawColumns([])
        ->make(true);
    }   
}

public function insert(Request $request){

    $post = $request->all();

    $response = array();
    $response['status'] = 0; 
    $response['msg'] = 'Record Update failed!';

    $validation = Validator::make($request->all(), [
        'firmname'             => 'required',
        'firmtype'             => 'required',
        'description'             => 'required',
    ]);
    
    if ($validation->fails()) {
        $data['status'] = 0;
        $data['error'] = $validation->errors()->all();
        echo json_encode($data);
        exit();
    }

    $existingRecord = FirmDetail::firstOrNew([]);

    $existingRecord->firm_name = isset($post['firmname']) ? $post['firmname'] : '';
    $existingRecord->firm_type = isset($post['firmtype']) ? $post['firmtype'] : '';
    $existingRecord->description = isset($post['description']) ? $post['description'] : '';
    $existingRecord->created_at = Carbon::now();
 
    $existingRecord->save();
 
    if(isset($existingRecord->id)){
        $response['status'] = 1;
        $response['msg'] = 'Record Updated successfully.';
    }

    echo json_encode($response);
    exit();
}

}
