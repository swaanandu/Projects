<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CompaniesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Company;


class CompanyExportController extends Controller
{
    public function index()

    {

        $companies = Company::get();

  

        return view('companies', compact('companies'));

    }

        

    /**

    * @return \Illuminate\Support\Collection

    */

    public function export() 

    {

        return Excel::download(new CompaniesExport, 'companies.xlsx');

    }

       

    /**

    * @return \Illuminate\Support\Collection

    */

    

}