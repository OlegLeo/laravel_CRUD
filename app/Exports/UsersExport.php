<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Vtiful\Kernel\Excel;

class UsersExport implements FromCollection
{

           /*
            class InvoicesExport implements FromCollection
            {
                use Exportable;

                public function collection()
                {
                    return Invoice::all();
                }
            }*/

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function export()
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx', true, ['X-Vapor-Base64-Encode' => 'True']);
    }
    public function storeExcel()
    {
        return Excel::store(new InvoicesExport, 'invoices.xlsx', 's3');
    }



}
