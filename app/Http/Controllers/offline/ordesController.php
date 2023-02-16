<?php

namespace App\Http\Controllers\offline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ofline;
use App\models\Captains;

class ordesController extends Controller
{
    public function create()
    {
        $name = Captains::select('name')
        ->groupBy('name')
        ->get();

        return view('ofline.orders',compact('name'));


    }
    public function stort( Request $request)
    {


        $ofline= new ofline;

        $ofline->order_date = $request->order_date;
        $ofline->customer_name = $request->customer_name;
        $ofline->customer_location = $request->customer_location;
        $ofline->phone_number = $request->phone_number;
        $ofline->income = $request->income;
        $ofline->delevery_fees = $request->delevery_fees;
        $ofline->status = $request->status;
        $ofline->captain_name = $request->captain_name;
        $ofline->product_type = $request->product_type;
        $ofline->payment = $request->payment;
        $ofline->merchant = $request->merchant;
        $ofline->note = $request->note;

        $ofline->save();
       return back()->with('success','Added successfully');


    }
    public function edit($id)
    {
        $name = Captains::select('name')
        ->groupBy('name')
        ->get();
                $edit = ofline::where('id','=',$id)->first();
               return view('ofline.editview',compact('edit' ,'name'));

    }
    public function update(Request $request, $id)

    {



        $update = ofline::where('id','=',$id)->first();
        $update->order_date = $request->order_date;
        $update->customer_name = $request->customer_name;
        $update->customer_location = $request->customer_location;
        $update->phone_number = $request->phone_number;
        $update->income = $request->income;
        $update->delevery_fees = $request->delevery_fees;
        $update->status = $request->status;
        $update->captain_name = $request->captain_name;
        $update->product_type = $request->product_type;
        $update->payment = $request->payment;
        $update->merchant = $request->merchant;
        $update->note = $request->note;
        $update->save();
        return redirect()->route('order')->with('success','Modified successfully');



    }
    public function distory($id)
{

            $ofline = ofline::find($id);
            $ofline->delete($id);
            return back()->with('error','Successfully deleted');


}
}
