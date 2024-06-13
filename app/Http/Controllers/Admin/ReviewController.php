<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Review;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;




// namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
   
    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('admin.review');  
        }
        if ($request->ajax() && $request->isMethod('post')) {

            $data = Review::select('*')->get()->toArray();

            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $action =  '<a class="btn btn-primary mx-4" data-id="'.$row['id'].'" id="editReview">Edit</a>&nbsp; &nbsp;';
                $action .=  '<a class="btn btn-danger" data-id="'.$row['id'].'" id="removeReview">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function addReview(Request $request){

        $post = $request->all();
        $hid = $post['hid'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Update failed!';

        $validation = Validator::make($request->all(), [
            'name'             => 'required',
            'star'             => 'required',
            'description'      => 'required',
        ]);

        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        if(isset($hid) && $hid != ''){
            $updateReview = Review::where('id', $hid)->first();     
            $updateReview->name = isset($post['name']) ? $post['name'] : '';     
            $updateReview->occupation = isset($post['occupation']) ? $post['occupation'] : '';     
            $updateReview->stars = isset($post['star']) ? $post['star'] : '';     
            $updateReview->description = isset($post['description']) ? $post['description'] : '';     
            $updateReview->updated_at	 = Carbon::now();    
            $updateReview->save();

            if (isset($updateReview->id)) {
                $response['status'] = 1;
                $response['msg'] = 'Record Updated successfully.';
            }
        }else{
            $review =  new Review;
            $review->name =  isset($post['name']) ? $post['name'] : '';
            $review->occupation =  isset($post['occupation']) ? $post['occupation'] : '';
            $review->stars =  isset($post['star']) ? $post['star'] : '';
            $review->description =  isset($post['description']) ? $post['description'] : '';
            $review->created_at =  Carbon::now();
            $review->save();
            if (isset($review->id)) {
                $response['status'] = 1;
                $response['msg'] = 'Record Inserted successfully.';
            }
        }
   
      
        echo json_encode($response);
        exit();
    }

    public function editReview(Request $request){

        $edit_id = $request['id'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        $edit = array();

        if ($edit_id != "" && $edit_id != null) {

            $edit = Review::where('id', $edit_id)->first();

            if ($edit) {
                $response['status'] = 1;
                $response['msg'] = "Edit Successfully.";
                $response['data'] =  $edit;
            }
        }

        echo json_encode($response);
        exit();
    }

    public function removeReview(Request $request){

        $delete_id = $request['id'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        if ($delete_id != "" && $delete_id != null) {

            $delete = Review::where('id', $delete_id)->delete();
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
