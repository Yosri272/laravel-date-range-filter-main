<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ofline;

class ordesController extends Controller
{
    public function of_index()
    {
        $payment = ofline::select('payment')
        ->groupBy('payment')
        ->get();
        $status = ofline::select('status')
        ->groupBy('status')
        ->get();

        return view('ofline.show', compact('payment','status'));
    }
    public function getcaptain (Request $request)
    {
        if ($request->ajax()) {

            $payment = ofline::select('payment')
                ->groupBy('payment')
                ->get();

            return response()->json($payment);
        }
    }

    public function getstatus(Request $request)
    {
        if ($request->ajax()) {
            $status = ofline::select('status')
                ->groupBy('status')
                ->get();

            return response()->json($status);
        }
    }

    public function d_records(Request $request)
        {
            if ($request->ajax()) {

                if ($request->input('start_date') && $request->input('end_date')) {

                    $start_date = Carbon::parse($request->input('start_date'));
                    $end_date = Carbon::parse($request->input('end_date'));

                    if ($end_date->greaterThan($start_date)) {
                        $ofline = ofline::whereBetween('created_at', [$start_date, $end_date])->get();
                    } else {
                        $ofline = ofline::latest()->get();
                    }
                } else {
                    $ofline = ofline::latest()->get();
                }

                return response()->json([
                    'ofline' => $ofline
                ]);
            } else {
                abort(403);
            }
        }


        public function records(Request $request)
        {
            if ($request->ajax()) {

                if (request('std') && request('res')) {
                    $ofline = ofline::where('status', '=', request('std'))->where('payment', '=', request('res'))
                        ->latest()
                        ->get();
                } else {
                    $ofline = ofline::when(request('std'), function ($query) {
                        $query->where('status', '=', request('std'));
                    })
                        ->when(request('res'), function ($query) {
                            $query->where('payment', '=', request('res'));
                        })
                        ->latest()
                        ->get();
                }

                return response()->json([
                    'ofline' => $ofline
                ]);
            } else {
                abort(403);
            }
        }
}
