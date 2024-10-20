@extends('companies.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('companies.create') }}" class="btn btn-success btn-sm my-2">Create New Company</a>
                <a href="{{ url('exportcompanies') }}" class="btn btn-danger btn-sm my-2">ExportExcel</a>

            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>Company_id</th>
            <th>Name</th>
            <th>email</th>
            <th>logo</th>

            <th>website</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ $company->company_id }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->email }}</td>

            <td><img src="/logos/{{ $company->logo }}" width="100px"></td>
            <td>{{ $company->website }}</td>

            <td>
                <form action="{{ route('companies.destroy',$company->company_id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('companies.show',$company->company_id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->company_id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $companies->links() !!}
        
@endsection