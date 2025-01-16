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
    font-size: 1rem;
    vertical-align: middle;
}

.table thead {
    background-color: grey;
    color: white;
    text-transform: uppercase;
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
@extends('layouts.app')
@section('content')
<div class="content">

<div class="container">
    



<div class="container mt-5" id="abc">



<h2 class="text-center mb-4">Exam Timetable & Marks/Grades</h2>
        <!-- Marks and Grades Table -->
    <h3>Marks & Grades</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Marks</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>90 - 100</td>
                <td>A+</td>
            </tr>
            <tr>
                <td>80 - 89</td>
                <td>A</td>
            </tr>
            <tr>
                <td>70 - 79</td>
                <td>B+</td>
            </tr>
            <tr>
                <td>60 - 69</td>
                <td>B</td>
            </tr>
            <tr>
                <td>50 - 59</td>
                <td>C+</td>
            </tr>
            <tr>
                <td>40 - 49</td>
                <td>C</td>
            </tr>
            <tr>
                <td>30 - 39</td>
                <td>D+</td>
            </tr>
            <tr>
                <td>20 - 29</td>
                <td>D</td>
            </tr>
            <tr>
                <td>0 - 19</td>
                <td>Fail</td>
            </tr>
        </tbody>
    </table>

    </br>
    </br>
    </br>

    <!-- UKG & LKG Exam Timetable -->
    <h3>UKG & LKG Exam Timetable</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Subject</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>March 1, 2025</td>
                <td>Drawing</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 3, 2025</td>
                <td>Computer</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 5, 2025</td>
                <td>English</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 7, 2025</td>
                <td>Maths</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
        </tbody>
    </table>
    </br>
    </br>

    <!-- 1st to 10th Standard Exam Timetable -->
    <h3>1st to 10th Standard Exam Timetable</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Subject</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>March 1, 2025</td>
                <td>Physical Education</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 3, 2025</td>
                <td>Moral</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 5, 2025</td>
                <td>Drawing</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 7, 2025</td>
                <td>Computer</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 9, 2025</td>
                <td>English</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 11, 2025</td>
                <td>Maths</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 13, 2025</td>
                <td>Science</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 15, 2025</td>
                <td>Social</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 17, 2025</td>
                <td>Kannada</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
            <tr>
                <td>March 19, 2025</td>
                <td>Hindi</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
        </tbody>
    </table>


</div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
