<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
// namespace App\Http\Controllers\admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;

class CategoryController extends Controller
{
   
    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('admin.category');  
        }
        if ($request->ajax() && $request->isMethod('post')) {
            $data = Category::select('*')->get()->toArray();

            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $action =  '<td style="
                display: inline-flex"><a class="btn btn-primary mx-2" data-id="'.$row['id'].'" id="editCategory">Edit</a>&nbsp; &nbsp;';
                $action .=  '<a class="btn btn-danger" data-id="'.$row['id'].'" id="removeCateory">Delete</a></td>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function addCategory(Request $request){
        $post = $request->all();
        $hid = $post['hid'];
       
        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Insertion failed!';

        $validation = Validator::make($request->all(), [
            'category'             => 'required',
        ]);

        if ($validation->fails()) {
            $data['status'] = 0;
            $data['error'] = $validation->errors()->all();
            echo json_encode($data);
            exit();
        }

        if(isset($hid) && $hid != ''){
            $updateCategory = Category::where('id', $hid)->first();     
            $updateCategory->category = isset($post['category']) ? $post['category'] : '';     
            $updateCategory->updated_at	 = Carbon::now();    
            $updateCategory->save();

            if (isset($updateCategory->id)) {
                $response['status'] = 1;
                $response['msg'] = 'Record Updated successfully.';
            }
        }else{
            $category =  new Category;
            $category->category =  isset($post['category']) ? $post['category'] : '';
            $category->created_at =  Carbon::now();
            $category->save();
            if (isset($category->id)) {
                $response['status'] = 1;
                $response['msg'] = 'Record Inserted successfully.';
            }
        }

        echo json_encode($response);
        exit();

    }

    public function editCategory(Request $request){

        $edit_id = $request['id'];

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        $edit = array();

        if ($edit_id != "" && $edit_id != null) {

            $edit = Category::where('id', $edit_id)->first();

            if ($edit) {
                $response['status'] = 1;
                $response['msg'] = "Edit Successfully.";
                $response['data'] =  $edit;
            }
        }

        echo json_encode($response);
        exit();
    }
    public function removeCategory(Request $request){

        $delete_id = $request['id'];
        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        if ($delete_id != "" && $delete_id != null) {

            $delete = Category::where('id', $delete_id)->delete();
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
