<?php

namespace App\Http\Controllers\maintenance;
use App\models\motors;
use App\models\maintenances;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class maintenanceController extends Controller
{
    public function create()
    {
        $motors = motors::all();

        return view('maintenances.ma_register',compact('motors'));

    }
    public function stort( Request $request)
    {
        $maintenances= new maintenances;
        $maintenances->plate_number = $request->plate_number;
        $maintenances->maintenance_details = $request->maintenance_details;
        $maintenances->Maintenance_date = $request->Maintenance_date;
        $maintenances->amount = $request->amount;
        $maintenances->save();
       return back()->with('success','Added successfully');


    }
    public function edit($id)
    {

                $edit = maintenances::where('id','=',$id)->first();
               return view('maintenances.ma_editview',compact('edit'));

    }
    public function update(Request $request, $id){




        $update = maintenances::where('id','=',$id)->first();
        $update->plate_number = $request->plate_number;
        $update->maintenance_details = $request->maintenance_details;
        $update->Maintenance_date = $request->Maintenance_date;
        $update->amount = $request->amount;
        $update->save();
        return redirect()->route('maintenances')->with('success','Modified successfully');


    }
    public function distory($id)
{

            $maintenances = maintenances::find($id);
            $maintenances->delete();
            return back()->with('error','Successfully deleted');


}
public function test($id)
{


            $edit = maintenances::where('plate_number','=',$id)->get();

           return view('maintenances.view',compact('edit'));

}
public function mission(Request $request)
    {
        if ($request->ajax()) {


            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $maintenances = maintenances::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $maintenances = maintenances::latest()->get();
                }
            } else {
                $maintenances = maintenances::latest()->get();
            }

            return response()->json([
                'maintenances' => $maintenances
            ]);
        } else {
            abort(403);
        }
    }

}
