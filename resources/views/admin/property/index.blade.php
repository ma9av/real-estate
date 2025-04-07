@extends('admin.layout')

@section('content')

 <h1> Property Management </h1>

 <table id="employeeTable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Address</th>
            <th>Price</th>
            <th>Bedrooms</th>
            <th>Bathrooms</th>
            <th>Area</th>
        </tr>
    </thead>
</table>


@endsection