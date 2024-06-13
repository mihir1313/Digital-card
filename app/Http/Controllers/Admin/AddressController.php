<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Address;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
   
    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
        
            return view('admin.address');

        }
        if ($request->ajax() && $request->isMethod('post')) {
            
            $data = Address::select('id','description','location')->get()->toArray();

            return Datatables::of($data)
            ->addIndexColumn()

            ->addColumn('action', function ($row) {
                $action =  '<td style="
                display: inline-flex"><a class="btn btn-primary mx-2" data-id="'.$row['id'].'" id="editAddress">Edit</a>&nbsp; &nbsp;';
                $action .=  '<a class="btn btn-danger" data-id="'.$row['id'].'" id="removeAddress">Delete</a></td>';
                return $action;
            })

            ->rawColumns(['action'])
            ->make(true);
        }
    }
    
    public function insert(Request $request){
        $post = $request->all();
        $hid = $post['hid'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Insertion failed!';

        $validation = Validator::make($request->all(), [
            'address'             => 'required',
        ]);

        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        if(isset($hid) && $hid != ''){
            $updateAddress = Address::where('id', $hid)->first();     
            $updateAddress->description = isset($post['address']) ? $post['address'] : '';     
            $updateAddress->location = isset($post['location']) ? $post['location'] : '';     
            $updateAddress->updated_at	 = Carbon::now();    
            $updateAddress->save();

            if (isset($updateAddress->id)) {
                $response['status'] = 1;
                $response['msg'] = 'Record Updated successfully.';
            }
        }else{
            $address =  new Address;
            $address->description =  isset($post['address']) ? $post['address'] : '';
            $address->location =  isset($post['location']) ? $post['location'] : '';
            $address->created_at =  Carbon::now();
            $address->save();
            if (isset($address->id)) {
                $response['status'] = 1;
                $response['msg'] = 'Record Inserted successfully.';
            }
        }

        echo json_encode($response);
        exit();

    }
    public function edit(Request $request){
        $edit_id = $request['id'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        $edit = array();

        if ($edit_id != "" && $edit_id != null) {

            $edit = Address::where('id', $edit_id)->first();

            if ($edit) {
                $response['status'] = 1;
                $response['msg'] = "Edit Successfully.";
                $response['data'] =  $edit;
            }
        }

        echo json_encode($response);
        exit();
    }
    public function delete(Request $request){
        $delete_id = $request['id'];
        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        if ($delete_id != "" && $delete_id != null) {

            $delete = Address::where('id', $delete_id)->delete();
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
