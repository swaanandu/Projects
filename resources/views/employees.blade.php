<!DOCTYPE html>

<html>

<head>

    <title>Employee Export</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

     

<div class="container">

    <div class="card bg-light mt-3">

        <div class="card-header">

            ExportExcel

        </div>

        <div class="card-body">

           

  

            <table class="table table-bordered mt-3">

                <tr>

                    <th colspan="3">

                        List Of Employees

                        <a class="btn btn-warning float-end" href="{{ route('employees.export') }}">Export Employee Data</a>

                    </th>

                </tr>

                <tr>

                    <th>Employee_id</th>
                    <th>Firstname</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                </tr>

                @foreach($employees as $employee)

                <tr>

                    <td>{{ $employee->employee_id }}</td>

                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->company }}</td>
                </tr>

                @endforeach

            </table>

  

        </div>

    </div>

</div>

     

</body>

</html>