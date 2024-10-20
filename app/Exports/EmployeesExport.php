<?php

  

namespace App\Exports;

  

use App\Models\Employee;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

  

class EmployeesExport implements FromCollection, WithHeadings

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function collection()

    {

        return Employee::select("employee_id", "firstname", "lastname","email","phone","company")->get();

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function headings(): array

    {

        return ["Employee_id", "Firstname", "Lastname","Email","Phone","Company"];

    }

}