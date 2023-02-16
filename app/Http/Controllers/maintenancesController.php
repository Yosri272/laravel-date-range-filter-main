<?php

namespace App\Http\Controllers;
use App\models\maintenances;

use Illuminate\Http\Request;


class maintenancesController extends Controller
{
    public function ma_index()
    {
       return view('maintenances.maintenances');
    }

    public function ma_records(Request $request)
    {
        if ($request->ajax()) {


            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $maintenances = maintenances::whereBetween('Maintenance_date', [$start_date, $end_date])->get();
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
