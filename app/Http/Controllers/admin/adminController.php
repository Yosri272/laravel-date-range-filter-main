<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\Models\User;

class adminController extends Controller
{
    public function edit($id)
    {
                $edit = User::where('id','=',$id)->first();
               return view('admin/editview',compact('edit'));

    }
    public function update(Request $request, $id){

        $update= User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->save();
        return redirect()->route('v_admin')->with('success','Modified successfully');


}
    public function distory($id)
    {

                $Delm_view = User::find($id);
                $Delm_view->delete();
                return back()->with('error','Successfully deleted');


    }

    public function index()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','1');
       if($topicData->isEmpty())

       {
        return view('admin/s_topic2');
       }
       else
       {
        return view('admin/display/a_display' ,compact('topicData'));

       }

    }
    public function index1()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','0')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');

   if($topicData->isEmpty())

   {
    return view('admin/s_topic2');
   }
   else
   {
    return view('admin/display/a_display1' ,compact('topicData'));
   }


    }
    public function index2()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');
     if($topicData->isEmpty())

     {
      return view('admin/s_topic2');
     }
     else
     {
      return view('admin/display/a_display2' ,compact('topicData'));
     }



    }
    public function c_admin()
    {

        return view('admin.c_register');


    }
    public function Stort( Request $request)
    {


  $admin= new User;
  $admin->name = $request->name;
  $admin->email  = $request->email;
  $admin->type  = $request->type;
  $admin->password =Hash::make($request->input('password'));

  $admin->save();
  return back()->with('success','Added successfully');

}
}
