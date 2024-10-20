@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Employee Information
                </div>
                <div class="float-end">
                    <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="employee_id" class="col-md-4 col-form-label text-md-end text-start"><strong>employee_id</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->employee_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-end text-start"><strong>firstName:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->firstname }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-end text-start"><strong>lastName:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->lastname }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->email }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->phone }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="company" class="col-md-4 col-form-label text-md-end text-start"><strong>company:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $employee->company }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection