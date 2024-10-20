<?php

  

namespace App\Exports;

  

use App\Models\Company;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

  

class CompaniesExport implements FromCollection, WithHeadings

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function collection()

    {

        return Company::select("company_id", "name", "email","logo","website")->get();

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function headings(): array

    {

        return ["company_id", "name", "email","logo","website"];

    }

}