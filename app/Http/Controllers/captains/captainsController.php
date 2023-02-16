<?php

namespace App\Http\Controllers\captains;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\motors;
use App\models\Captains;
use App\models\Tripe;
use PDF;

class captainsController extends Controller
{
    public function create()
    {
        $captain_name = Tripe::select('captain_name')
        ->groupBy('captain_name')
        ->get();
        $motor = motors::select('motor')
        ->where('c_folg','=',0)
        ->groupBy('motor')
        ->get();
        return view('captains.c_register',compact('motor','captain_name'));


    }
    public function stort( Request $request)
{

    $Captains= new Captains;



    $Captains->account_type = $request->account_type;
    $Captains->name = $request->name;
    $Captains->phone = $request->phone;
    $Captains->status = $request->status;
    $Captains->pin_code = $request->pin_code;

    $Captains-> motor = $request->motor;

    //////////////
    $motors = motors::where('motor','=',$request->motor)->first();
    $motors->c_folg=1;
    $motors->save();
    ///////////






    $Captains->license_number = $request->license_num;
    $Captains->end_date = $request->end_date;
    $Captains->Salary = $request->salary;
    $Captains->bonce = $request->bonce;
    $Captains->save();
   return back()->with('success','Added successfully');


}
public function display()
{

    $Captains=Captains::orderBy('id' , 'DESC')->paginate(5);



    return view('captains.view' ,compact('Captains'));
}


public function edit($id)
    {
                $motors = motors::all();
                $edit = Captains::where('id','=',$id)->first();
               return view('captains.c_editview',compact('edit','motors'));

    }
public function update(Request $request, $id){



    $update = Captains::where('id','=',$id)->first();
    $update->account_type = $request->account_type;
    $update->name = $request->name;
    $update->phone = $request->phone;
    $update->status = $request->status;
    $update->pin_code = $request->pin_code;
    $update->motor = $request->motor;
    $update->license_number = $request->license_num;
    $update->end_date = $request->end_date;
    $update->Salary = $request->salary;
    $update->bonce = $request->bonce;
    $update->save();
    return redirect()->route('captains')->with('success','Modified successfully');


}

public function search(Request $request)
{

$input = $request->captains;
$for = $request->for;
$to = $request->to;


   $Captains=Captains::orderBy('id' , 'desc')->orWhere('name', '=', $input)->orWhere('created_at', '=', $for)->paginate(50);
   return view('captains.view' ,compact('Captains'));

}

public function getpdf()
{

    $Captains = Captains::all();
    $pdf= PDF::loadView('pdf.captains' ,['Captains' =>  $Captains]);
    //return $pdf ->stream('captains.pdf');
    return $pdf ->download('captains.pdf');

}
public function distory($id)
{

            $Captains = Captains::find($id);
            $Captains->delete();
            return back()->with('error','Successfully deleted');


}
}
