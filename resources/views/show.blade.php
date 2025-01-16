
@extends('layouts.app')
@section('content')

<!-- Body -->
 <head>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}



h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #444;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 20px;
    font-size: 16px;
   
    text-align: left;
}

table thead th {
    background-color:  #5a6268;
    color: #fff;
    padding: 10px;
}

table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ddd;
}

table tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}

        </style>
 </head>
 <div class="container">
        <h2 class="text-center">Registered Students</h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Course</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Data -->
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@example.com</td>
                    <td>+1234567890</td>
                    <td>2001-05-15</td>
                    <td>Male</td>
                    <td>123 Street, City</td>
                    <td>B.Sc</td>
                    <td>1st Year</td>
                </tr>
                <tr>
                    <td>Jane</td>
                    <td>Smith</td>
                    <td>janesmith@example.com</td>
                    <td>+9876543210</td>
                    <td>1999-12-10</td>
                    <td>Female</td>
                    <td>456 Avenue, City</td>
                    <td>Engineering</td>
                    <td>4th Year</td>
                </tr>
            </tbody>
        </table>
    </div>



</div>
    
 
    <!-- Bootstrap Bundle with Popper -->
@endsection()  


