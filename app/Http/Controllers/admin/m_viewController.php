<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class m_viewController extends Controller
{
    public function index($id)
    {


        $a_viewData=User::orderBy('id' , 'DESC')->paginate(5);
        dd($a_viewData);

        return view('admin/a_view' ,compact('a_viewData'));
    }
}
