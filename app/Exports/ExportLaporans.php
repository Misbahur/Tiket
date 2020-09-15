<?php

namespace App\Exports;

use App\meta_transaksi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;



class ExportLaporans implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    private $data;

    public function __construct($data, $startDate, $endDate){
        $this->data = $data;
        $this->startDate = $startDate;
        $this->endDate = $endDate;

    }
    use Exportable;
    public function view():View{
        return view('laporancetakExcel', [
            'datas' => $this->data,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate
            ]);
    }
}
