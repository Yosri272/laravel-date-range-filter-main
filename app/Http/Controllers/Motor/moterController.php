<?php

namespace App\Http\Controllers\Motor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\motors;
use App\models\maintenance;

use PDF;

class moterController extends Controller
{
    public function create()
{


    return view('motors.m_register');


}

public function stort( Request $request)
{

    $Motors= new Motors;
    $Motors->motor = $request->motors;
    $Motors-> plate_number = $request->plate_Num;
    $Motors->status = $request->status;
    $Motors->counter_number = $request->counter_number;
    $Motors-> license_number = $request->license_Num;
    $Motors->counter = $request->counter;
    $Motors-> license_date = $request->license_date;
    $Motors-> maintenance_date = $request->maintenance_date;
    $Motors->save();
return back()->with('success','Added successfully');


}
public function display()
{

    $Motors=Motors::orderBy('id' , 'DESC')->paginate(5);



    return view('motors.view' ,compact('Motors'));
}
public function edit($id)
    {
                $edit = Motors::where('id','=',$id)->first();
               return view('motors.m_editview',compact('edit'));

    }
    public function update(Request $request, $id){
        $data = Motors::where('id','=',$id)->first();

        $oil_change=$request->counter_number-$data->counter_number;


        $update = Motors::where('id','=',$id)->first();
        $update->motor = $request->motors;
        $update-> plate_number = $request->plate_Num;
        $update->status = $request->status;
        $update->counter_number = $request->counter_number;
        $update-> license_number = $request->license_Num;
        $update-> maintenance_date = $request->maintenance_date;
        $update->license_date = $request->license_date;
        $update->oil_change=$oil_change;
        $update-> counter = $request->counter;
        $update->save();
        return redirect()->route('motor')->with('success','Modified successfully');


    }


    public function getpdf()
    {

        $Motors = Motors::all();
        $pdf= PDF::loadView('pdf.motors' ,['Motors' =>  $Motors]);
       // return $pdf ->stream('motors.pdf');
        return $pdf ->download('motors.pdf');

    }




    public function search(Request $request)
    {

    $input = $request->motor;
    $for = $request->for;
    $to = $request->to;


       $Motors=Motors::orderBy('id' , 'desc')->orWhere('motor', '=', $input)->orWhere('created_at', '=', $for)->paginate(50);
       return view('motors.view' ,compact('Motors'));

    }


public function distory($id)
{

            $Motors = Motors::find($id);
            $Motors->delete();
            return back()->with('error','Successfully deleted');


}

}
