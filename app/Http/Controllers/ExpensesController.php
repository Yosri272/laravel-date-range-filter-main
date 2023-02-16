<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Http\Request;

use App\Models\Expenses;


use App\Models\User;
use DataTables;


class ExpensesController extends Controller
{
    public function e_index()
    {
        return view('expenses.expenses');
    }
    public function e_records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $expenses = Expenses::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $expenses = Expenses::latest()->get();
                }
            } else {
                $expenses = Expenses::latest()->get();
            }

            return response()->json([
                'expenses' => $expenses
            ]);
        } else {
            abort(403);
        }
    }
}
