<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Import Export Excel to Database Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 10 Import Export Excel to Database Example - ItSolutionStuff.com
        </div>
        <div class="card-body">
            <form action="{{ route('csv.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" required>
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        List Of Users
                        <a class="btn btn-warning float-end" href="{{ route('csv.export') }}">Export User Data</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Date of Birth</th>
                    <th>Prim. Carrier Name</th>
                    <th>Prim. Subscriber ID</th>
                    <th>Provider Full Name</th>
                    <th>Billing Date</th>
                    <th>Procedure Code</th>
                    <th>Tooth</th>
                    <th>Surfaces</th>
                    <th>Quadrant</th>
                    <th>Cost</th>
                </tr>
                @foreach($csvs as $csv)
                <tr>
                    <td>{{ $csv->id }}</td>
                    <td>{{ $csv->full_name }}</td>
                    <td>{{ $csv->dob }}</td>
                    <td>{{ $csv->insurance_name }}</td>
                    <td>{{ $csv->subscriber_id }}</td>
                    <td>{{ $csv->provider_full_name }}</td>
                    <td>{{ $csv->billing_date }}</td>
                    <td>{{ $csv->procedure_code }}</td>
                    <td>{{ $csv->tooth }}</td>
                    <td>{{ $csv->surface }}</td>
                    <td>{{ $csv->quadrant }}</td>
                    <td>{{ $csv->cost }}</td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
</body>
</html>