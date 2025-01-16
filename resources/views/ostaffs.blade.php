<style>body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;

}

.container {
    max-width: 90%;
    margin-top: 40px;
    margin-bottom: 40px;
    
}

h2 {
    font-size: 1.5rem;
    color: #495057;
    margin-bottom: 20px;
    text-align: left;
    padding-left: 5px;
}

.table {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-left: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    vertical-align: middle;
}

.table thead {
    background-color: grey;
    color: white;
}

.table tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

.table tbody tr:nth-child(even) {
    background-color: #ffffff;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-bordered th, .table-bordered td {
    border: 1px solid #dee2e6;
}

.table-striped tbody tr:hover {
    background-color: #e9ecef;
}



        h2 {
            text-align: left;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            display: block;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 5px;
        }

        input[type="text"], select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }


@media (max-width: 768px) {
    .table th, .table td {
        font-size: 0.9rem;
        padding: 10px;
    }

    
}</style>
<!-- Add this to your <head> section -->

@extends('layouts.app')
@section('content')
<div class="content">
<div class="container">
    

</div>

<!-- Bootstrap JS Bundle -->

<div class="container mt-5" id="abc">
    <h2 class="text-center">Operating Staff Details</h2>
    <a class="sli" style="background-color:grey;  padding:20px; text-decoration:none; float: right; color:white; margin: bottom 10px; border-radius: 20px; font-size:medium;" href="{{'addstaffs'}}">Add Staffs</a>



    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
            <th>ID</th>   
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Position</th>
               
                <th>Salary</th>
                <th>Role</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                
            </tr>
        </thead>
        <tbody>
        <tr>
                @foreach($staf as $ss)
                <td>{{$ss->id}}</td>
                <td>{{$ss->firstName}}</td>
                <td>{{$ss->lastName}}</td>
                <td>{{$ss->dob}}</td>
                <td>{{$ss->gender}}</td>
                <td>{{$ss->qualification}}</td>
                <td>{{$ss->position}}</td>
                <td>{{$ss->salary}}</td>
                <td>{{$ss->staffType}}</td>
                <td>{{$ss->email}}</td>
                <td>{{$ss->phone}}</td>
                <td>{{$ss->address}}</td>

          
            </tr>
            @endforeach

            
        </tbody>
    </table>

    
</div>
</div>
@endsection

