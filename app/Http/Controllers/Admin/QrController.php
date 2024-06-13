<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Qr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;


class QrController extends Controller
{
   
    public function index(Request $request)
    {
        if (!$request->isMethod('post')) {

        return view('admin.qr');

        }
        if ($request->ajax() && $request->isMethod('post')) {

                        
            $data = Qr::select('*')->get()->toArray();

            return Datatables::of($data)
            ->addIndexColumn()

            ->addColumn('img', function ($row) {
          
            $img = '<img class="" src="'.asset('uploads/qr/' . $row['img']).'" style="width:50px"  alt="img">';
            return '<td style="text-align: center; vertical-align: middle;">' . $img . '</td>';
            })
        
            ->rawColumns(['img'])
            ->make(true);
        }
    }
    
    public function insert(Request $request){
        // Qr::
        $req = $request->all();
        
        $response = array();
        $response['status'] = 0;
        $response['msg'] = 'Record Update failed!';



        if (isset($req['img']) && $req['img'] != "") {
            $name = time() . '.' . $req["img"]->getClientOriginalExtension();
            $req["img"]->move(public_path('uploads/qr'), $name);
            $req["img"] = $name;
        }

        $existingRecord = Qr::firstOrNew([]);
        

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
