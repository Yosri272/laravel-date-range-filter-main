<?php

namespace App\Http\Controllers\tripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Tripe;
use App\models\motors;

use PDF;

class tripeController extends Controller
{
    public function create()
    {
        $motors = motors::all();
        return view('tripe.t_register',compact('motors'));



    }
    public function stort( Request $request)
    {
        $captain_name=$request->captain_name;
        $motors = motors::all()->where('motor', '=', $captain_name);
        foreach($motors as $data)

         {
            $data->id;
           // dd($data->id);





        $Tripe= new Tripe;
        $Tripe->date_id=$request->date_id;
        $Tripe->captain_id= $data->id;;
        $Tripe->captain_name=$request->captain_name;
        $Tripe-> phone_number=$request->phone_number;
        $Tripe-> t_id=$request->t_id;
        $Tripe->captain_action=$request->captain_action;
        $Tripe-> trip_status=$request->trip_status;
        $Tripe-> total_fare=$request->total_fare;
        $Tripe->eta=$request->eta;
        $Tripe-> pickup_to_dropoff_distance=$request->pickup_to_dropoff_distance;

        $Tripe->save();
       return back()->with('success','Added successfully');

         }
    }
    public function display()
{

    $Tripe=Tripe::orderBy('id' , 'DESC')->paginate(10);
    return view('tripe.view' ,compact('Tripe'));
}
public function edit($id)
    {
                $edit = Tripe::where('id','=',$id)->first();
               return view('tripe.t_editview',compact('edit'));

    }
    public function update(Request $request, $id)

    {

        // $captain_name=$request->captain_name;
        // $motors = motors::all()->where('motor', '=', $captain_name);
        // foreach($motors as $data)

        //  {

        //     $data->id;


        $update = Tripe::where('id','=',$id)->first();
        $update->date_id=$request->date_id;
        $update->captain_name=$request->captain_name;
        $update-> phone_number=$request->phone_number;
        $update-> t_id=$request->t_id;
        $update->captain_action=$request->captain_action;
        $update-> trip_status=$request->trip_status;
        $update-> total_fare=$request->total_fare;
        $update->eta=$request->eta;
        $update-> pickup_to_dropoff_distance=$request->pickup_to_dropoff_distance;
        $update->save();
        return redirect()->route('tripe')->with('success','Modified successfully');



    }
    public function getpdf(Request $request)
    {
        $input = $request->all();
     //dd($input);
        $Tripe = Tripe::all();
        $pdf= PDF::loadView('pdf.tripe' ,['Tripe' =>  $Tripe]);
       // return $pdf ->stream('tripe.pdf');
       return $pdf ->download('tripe.pdf');

    }
public function distory($id)
{

            $Tripe = Tripe::find($id);
            $Tripe->delete($id);
            return back()->with('error','Successfully deleted');


}

public function import()
{

    return view('tripe.importdata' );
}
public function search(Request $request)
{

$input = $request->captain_name;
$for = $request->for;
$to = $request->to;


   $Tripe=Tripe::orderBy('id' , 'desc')->orWhere('captain_name', '=', $input)->orWhere('created_at', '=', $for)->paginate(50);
   return view('tripe.view' ,compact('Tripe'));

}
}
