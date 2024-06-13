<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
   
    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('admin.socialmedia');  
        }
        if ($request->ajax() && $request->isMethod('post')) {

            $data = SocialMedia::select('*')->get()->toArray();

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
            'facebook'             => 'required',
            'youtube'             => 'required',
            'instagram'             => 'required',
            'linkedIn'             => 'required',
        ]);

        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        $existingRecord = SocialMedia::firstOrNew([]);
        $existingRecord->facebook = isset($post['facebook']) ? $post['facebook'] : '';
        $existingRecord->youtube = isset($post['youtube']) ? $post['youtube'] : '';
        $existingRecord->instagram = isset($post['instagram']) ? $post['instagram'] : '';
        $existingRecord->linkedIn = isset($post['linkedIn']) ? $post['linkedIn'] : '';
        $existingRecord->save();

        if (isset($existingRecord->id)) {
            $response['status'] = 1;
            $response['msg'] = 'Record Updated successfully.';
        }

        echo json_encode($response);
        exit();
    }

}
