@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">Employee List</div>
            <div class="card-body">
                <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Employee</a>
                <a href="{{ url('exportemployees') }}" class="btn btn-danger btn-sm my-2"> Export Excel</a>

                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">employee_id</th>
                        <th scope="col">firstName</th>
                        <th scope="col">lastName</th>

                        <th scope="col">email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Company</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->employee_id }}</th>
                            <td>{{ $employee->firstname }}</td>
                            <td>{{ $employee->lastname }}</td>

                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->company }}</td>
                            <td>
                                <form action="{{ route('employees.destroy', $employee->employee_id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('employees.show', $employee->employee_id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('employees.edit', $employee->employee_id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Employees Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $employees->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection