<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\FirmImg;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class FirmImgController extends Controller
{
   public function index(Request $request){
      if (!$request->isMethod('post')) {
         return view('admin.firmImg');  
     }
     
     if ($request->ajax() && $request->isMethod('post')) {
      
      $data = FirmImg::select('*')->get()->toArray();

      return Datatables::of($data)
      ->addIndexColumn()

      ->addColumn('img', function ($row) {
    
      $img = '<img class="" src="'.asset('uploads/firm/' . $row['img']).'" style="width:50px"  alt="img">';
      return '<td style="text-align: center; vertical-align: middle;">' . $img . '</td>';
      })
  
      ->rawColumns(['img'])
      ->make(true);
     }   
   }

   public function insert(Request $request){

      $req = $request->all();
   
      $response = array();
      $response['status'] = 0;
      $response['msg'] = 'Record Update failed!';



      if (isset($req['img']) && $req['img'] != "") {
          $name = time() . '.' . $req["img"]->getClientOriginalExtension();
          $req["img"]->move(public_path('uploads/firm'), $name);
          $req["img"] = $name;
      }

      $existingRecord = FirmImg::firstOrNew([]);
      
      $existingRecord->img = isset($req["img"]) ? $req["img"] : '';
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
