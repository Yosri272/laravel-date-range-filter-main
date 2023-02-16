<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\Captains;

class captainsController extends Controller
{
    public function c_index()
    {
        return view('captains.captains');
    }
    public function c_records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $captains = Captains::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $captains = Captains::latest()->get();
                }
            } else {
                $captains = Captains::latest()->get();
            }

            return response()->json([
                'captains' => $captains
            ]);
        } else {
            abort(403);
        }
    }
}
