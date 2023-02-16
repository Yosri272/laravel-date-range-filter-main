<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\commission;


class commissionController extends Controller
{
    public function co_index()
    {
        return view('commission.commission');
    }

    public function co_records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $commission = commission::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $commission = commission::latest()->get();
                }
            } else {
                $commission = commission::latest()->get();
            }
            

            return response()->json([
                'commission' => $commission
            ]);
        } else {
            abort(403);
        }
    }
}
