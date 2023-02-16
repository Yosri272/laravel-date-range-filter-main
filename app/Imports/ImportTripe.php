<?php

namespace App\Imports;
use Carbon\Carbon;
use App\models\Tripe;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns \Importable;
use Maatwebsite\Excel\Concerns \SkipsEmptyRows;
use Maatwebsite\Excel\Concerns \ToCollection;
use Maatwebsite\Excel\Concerns \WithHeadingRow;
use Maatwebsite\Excel\Concerns \WithMapping;
use Maatwebsite\Excel\Concerns \WithValidation;
use Illuminate\Support\Facades\DB;
use Phpoffice\PhpSpreadsheet\Shared\Date;


class ImportTripe implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
    //    $yos= $row->each(function($row) {

    //         $created_at = $row->created_at->format('Y-m-d');

    //     });
    //     dd($yos);



    $yoei= new Tripe([
            'date_id'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
            'captain_id'=>$row[1]??'',
            'captain_name'=>$row[2]??'',
            'phone_number'=>$row[3]??'',
            't_id'=>$row[4]??'',
            'captain_action'=>$row[5]??'',
            'trip_status'=>$row[6]??'',
            'total_fare'=>$row[7]??'',
             'eta'=>$row[8]??'',
            'pickup_to_dropoff_distance'=>$row[9]??'',
        ]);
       // dd($yoei);
        return  $yoei;
    }

}
