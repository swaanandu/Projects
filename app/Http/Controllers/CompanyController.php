<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View

    {

        return view('companies.index', ['companies' => Company::latest()->paginate(5)]);

    }

  

    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {

        return view('companies.create');

    }

  

    /**

     * Store a newly created resource in storage.

     */

    public function store(Request $request): RedirectResponse

    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'logo' => 'required|dimensions:min_width=100,min_height=100',
            'website'=>'nullable',

        ]);

        $input = $request->all();

        if ($logo = $request->file('logo')) {

            $destinationPath = 'logos/';

            $profileImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();

            $logo->move($destinationPath, $profileImage);

            $input['logo'] = "$profileImage";

        }

        Company::create($input);

        return redirect()->route('companies.index')->with('success','Company created successfully.');

    }

  

    /**

     * Display the specified resource.

     */

    public function show(Company $company): View

    {

        return view('companies.show',compact('company'));

    }

  

    /**

     * Show the form for editing the specified resource.

     */

    public function edit(Company $company): View

    {

        return view('companies.edit',compact('company'));

    }

  

    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, Company $company): RedirectResponse

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required',
            
            'logo' => 'dimensions:min_width=100,min_height=100',

            'website'=>'nullable',

        ]);
  
        $input = $request->all();

        if ($logo = $request->file('logo')) {

            $destinationPath = 'logos/';

            $profileImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();

            $logo->move($destinationPath, $profileImage);

            $input['logo'] = "$profileImage";

        }else{

            unset($input['logo']);

        }

        $company->update($input);

      
        return redirect()->route('companies.index')->with('success','Company updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     */

    public function destroy(Company $company): RedirectResponse

    {

        $company->delete();

        return redirect()->route('companies.index')->with('success','Company deleted successfully');

    }

}