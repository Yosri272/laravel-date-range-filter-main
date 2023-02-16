<?php

namespace App\Http\Controllers;

use DataTables;
use Carbon\Carbon;
use App\Models\Student;
use App\Models\Expenses;
use App\Models\Tripe;
use App\Models\Motors;
use App\Models\Captains;
use App\Models\commission;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class StudentController extends DataTables
{
    public function index()
    {
        $standards = Student::select('standard')
        ->groupBy('standard')
        ->get();

      $results = Student::select('result')
        ->groupBy('result')
        ->get();

        return view('students', compact('standards', 'results'));
    }
    public function getStandard(Request $request)
    {
        if ($request->ajax()) {
            $standards = Student::select('standard')
                ->groupBy('standard')
                ->get();

            return response()->json($standards);
        }
    }
    public function getResult(Request $request)
    {
        if ($request->ajax()) {

            $results = Student::select('result')
                ->groupBy('result')
                ->get();

            return response()->json($results);
        }
    }

    public function records(Request $request)
    {
        if ($request->ajax()) {

            if (request('std') && request('res')) {
                $students = Student::where('standard', '=', request('std'))->where('result', '=', request('res'))
                    ->latest()
                    ->get();
            } else {
                $students = Student::when(request('std'), function ($query) {
                    $query->where('standard', '=', request('std'));
                })
                    ->when(request('res'), function ($query) {
                        $query->where('result', '=', request('res'));
                    })
                    ->latest()
                    ->get();
            }

            return response()->json([
                'students' => $students
            ]);
        } else {
            abort(403);
        }
    }



        public function d_records(Request $request)
        {
            if ($request->ajax()) {

                if ($request->input('start_date') && $request->input('end_date')) {

                    $start_date = Carbon::parse($request->input('start_date'));
                    $end_date = Carbon::parse($request->input('end_date'));

                    if ($end_date->greaterThan($start_date)) {
                        $students = Student::whereBetween('created_at', [$start_date, $end_date])->get();
                    } else {
                        $students = Student::latest()->get();
                    }
                } else {
                    $students = Student::latest()->get();
                }

                return response()->json([
                    'students' => $students
                ]);
            } else {
                abort(403);
            }
        }







}
