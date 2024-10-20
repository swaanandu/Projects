<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Employee;

  

class EmployeeExportController extends Controller

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function index()

    {

        $employees = Employee::get();

  

        return view('employees', compact('employees'));

    }

        

    /**

    * @return \Illuminate\Support\Collection

    */

    public function export() 

    {

        return Excel::download(new EmployeesExport, 'employees.xlsx');

    }

       

    /**

    * @return \Illuminate\Support\Collection

    */

    
}