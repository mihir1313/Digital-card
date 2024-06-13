<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advocate;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;



use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {

            return view('admin.contact');
        }
        if ($request->ajax() && $request->isMethod('post')) {
            
            $data = Advocate::select('*')->get()->toArray();

            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('status', function ($row) {
                if($row['status'] == 1){
                $status = '<span class="badge bg-success">Active</span>';
            }else{
                $status = '<span class="badge bg-danger">Inactive</span>';
                
                }
                return $status;
            })
            ->addColumn('img', function ($row) {
        $img = '<img class="" src="'.asset('uploads/advocates/' . $row['img']).'" style="width:50px"  alt="img">';
            return '<td style="text-align: center; vertical-align: middle;">' . $img . '</td>';
            })
            ->addColumn('action', function ($row) {
                $action =  '<a class="btn btn-primary mx-4" data-id="'.$row['id'].'" id="edit">Edit</a>&nbsp; &nbsp;';
                $action .=  '<a class="btn btn-danger" data-id="'.$row['id'].'" id="remove">Delete</a>';
                return $action;
            })
            ->rawColumns(['action','status','img'])
            ->make(true);
        }
    }

    public function addAdvocate(Request $request)
    {
 
        $req = $request->all();

        $hid = $req['hid'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Update failed!';


        $rules = array(
            'name' => 'required',
            'qualification' => 'required',
            'mobile_no' => 'required',
            'status' => 'required',
        );
        if ($hid == "") {
            $rules['img']  = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }
        $validator = Validator::make($req, $rules);

        if ($validator->fails()) {
            $response['status'] = 0;
            $response['msg'] = $validator->errors()->all();
        } else {

            if (isset($req['img']) && $req['img'] != "") {
                $name = time() . '.' . $req["img"]->getClientOriginalExtension();
                $req["img"]->move(public_path('uploads/advocates'), $name);
                $req["img"] = $name;
            }


            if ($hid == "") {
                $insertAdvocate = new Advocate;
                $insertAdvocate->name = isset($req['name']) ? $req['name'] : '';
                $insertAdvocate->position = isset($req['position']) ? $req['position'] : '';
                $insertAdvocate->qualification = isset($req['qualification']) ? $req['qualification'] : '';
                $insertAdvocate->img = isset($req['img']) ? $req['img'] : '';
                $insertAdvocate->phone = isset($req['mobile_no']) ? $req['mobile_no'] : '';
                $insertAdvocate->sequence = isset($req['sequence']) ? $req['sequence'] : '';
                $insertAdvocate->status = isset($req['status']) ? $req['status'] : '';
                $insertAdvocate->created_at = Carbon::now();
                $insertAdvocate->save();

                if (isset($insertAdvocate->id)) {
                    $response['status'] = 1;
                    $response['msg'] = 'Record Inserted successfully.';
                }
            } else {
                $updateAdvocate = Advocate::where('id', $hid)->first();
                $updateAdvocate->name = isset($req['name']) ? $req['name'] : '';
                $updateAdvocate->position = isset($req['position']) ? $req['position'] : '';
                $updateAdvocate->qualification = isset($req['qualification']) ? $req['qualification'] : '';
                $updateAdvocate->img = isset($req['img']) ? $req['img'] : $req['img_hid'];
                $updateAdvocate->phone = isset($req['mobile_no']) ? $req['mobile_no'] : '';
                $updateAdvocate->sequence = isset($req['sequence']) ? $req['sequence'] : '';
                $updateAdvocate->status = isset($req['status']) ? $req['status'] : '';
                $updateAdvocate->updated_at = Carbon::now();
                $updateAdvocate->save();

                if (isset($updateAdvocate->id)) {
                    $response['status'] = 1;
                    $response['msg'] = 'Record Updated successfully.';
                }
            }
        }
        echo json_encode($response);
        exit;
    }

    public function editAdvocate(Request $request){
        $edit_id = $request['id'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        $edit = array();

        if ($edit_id != "" && $edit_id != null) {

            $edit = Advocate::where('id', $edit_id)->first();

            if ($edit) {
                $response['status'] = 1;
                $response['msg'] = "Edit Successfully.";
                $response['data'] =  $edit;
            }
        }

        echo json_encode($response);
        exit();
    }

    public function removeAdvocate(Request $request){
        $delete_id = $request['id'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        if ($delete_id != "" && $delete_id != null) {

            $delete = Advocate::where('id', $delete_id)->delete();
            // $delete->save();
            if ($delete) {
                $response['status'] = 1;
                $response['msg'] = "Record Deleted successfully.";
            }
        }
        echo json_encode($response);
        exit();
    }
}
