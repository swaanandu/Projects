@extends('companies.layout')

     

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Company</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>

            </div>

        </div>

    </div>

     

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    

    <form action="{{ route('companies.update',$company->company_id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>email:</strong>

                    <input type="email" name="email" value="{{ $company->email }}" class="form-control" placeholder="email">

                </div>

            </div>

            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Logo:</strong>

                    <input type="file" name="logo" class="form-control" placeholder="logo">

                   <img src="/logos/{{ $company->logo }}" width="300px">

                </div>
            </div>
              
         <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>website</strong>

                    <input type="text" name="website" value="{{ $company->website }}" class="form-control" placeholder="website">

                </div>

            </div>
                
            

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

     

    </form>

@endsection