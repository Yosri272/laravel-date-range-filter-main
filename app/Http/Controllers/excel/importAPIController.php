<?php

namespace App\Http\Controllers\excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ImportTripe;
use Maatwebsite\Excel\Facades\Excel;


class importAPIController extends Controller
{
    public function importView(Request $request){
       
        $this->validate($request, [
            'file' => 'required|file|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

       $test= Excel::import(new ImportTripe, $file);

        return redirect('a_mission')->with('success', ' Successfully Import!');

    }
}
