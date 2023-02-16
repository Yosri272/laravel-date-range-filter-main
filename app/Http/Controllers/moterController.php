<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Motors;
use App\models\maintenance;

class moterController extends Controller
{
    public function m_index()
    {

        return view('motors.motor');
    }
    public function m_records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $motors = Motors::whereBetween('created_at', [$start_date, $end_date])->get();

                } else {
                    $motors = Motors::latest()->get();
                }
            } else {
                $motors = Motors::latest()->get();
            }

            return response()->json([
                'motors' => $motors
            ]);
        } else {
            abort(403);
        }
    }
}
