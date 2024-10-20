<!DOCTYPE html>

<html>

<head>

    <title>ExcelExport</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

     

<div class="container">

    <div class="card bg-light mt-3">

        <div class="card-body">

            <table class="table table-bordered mt-3">

                <tr>

                    <th colspan="3">

                        List Of Companies

                        <a class="btn btn-warning float-end" href="{{ route('companies.export') }}">Export Company Data</a>

                    </th>

                </tr>

                <tr>

                    <th>company_id</th>

                    <th>Name</th>

                    <th>Email</th>
                    <th>logo</th>
                    <th>website</th>


                </tr>

                @foreach($companies as $company)

                <tr>

                    <td>{{ $company->company_id }}</td>

                    <td>{{ $company->name }}</td>

                    <td>{{ $company->email }}</td>
                    <td>{{ $company->logo }}</td>
                    <td>{{ $company->website }}</td>



                </tr>

                @endforeach

            </table>

  

        </div>

    </div>

</div>

     

</body>

</html>