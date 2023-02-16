<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Expenses;
use PDF;

class ExpensesController extends Controller
{
    public function create()
    {
        return view('expenses.e_register');


    }
    public function stort( Request $request)
    {

        $Expenses= new Expenses;
        $Expenses->item = $request->item;
        $Expenses->price = $request->price;
        $Expenses->narration = $request->narration;
        $Expenses->date = $request->date;
        $Expenses->save();
       return back()->with('success','Added successfully');


    }
    public function display()
{

    $Expenses=Expenses::orderBy('id' , 'DESC')->paginate(5);



    return view('expenses.view' ,compact('Expenses'));
}
public function edit($id)
    {
                $edit = Expenses::where('id','=',$id)->first();
               return view('expenses.e_editview',compact('edit'));

    }
    public function update(Request $request, $id){




        $update = Expenses::where('id','=',$id)->first();
        $update->item = $request->item;
        $update->price = $request->price;
        $update->narration = $request->narration;
        $update->date = $request->date;
        $update->save();
        return redirect()->route('e_display')->with('success','Modified successfully');


    }

    public function search(Request $request)
    {

    $input = $request->expenses;
    $for = $request->for;
    $to = $request->to;
 // dd($for);


    $Expenses = Expenses::whereBetween('created_at', [$for, $to])->orWhere('item', '=', $input)->get();
    return view('expenses.search' ,compact('Expenses'));


    }

    public function getpdf()
    {

        $Expenses = Expenses::all();
        $pdf= PDF::loadView('pdf.expenses' ,['Expenses' =>  $Expenses]);
      //  return $pdf ->stream('expenses.pdf');
       return $pdf ->download('expenses.pdf');

    }
public function distory($id)
{

            $Expenses = Expenses::find($id);
            $Expenses->delete();
            return back()->with('error','Successfully deleted');


}
}
