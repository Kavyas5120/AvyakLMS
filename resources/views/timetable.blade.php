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

@media (max-width: 768px) {
    .table th, .table td {
        font-size: 0.9rem;
        padding: 10px;
    }
}</style>
@extends('layouts.app')
@section('content')
<div class="content">
<div class="container mt-5" id="abc">
<h2 class="mb-4">Class Timetable</h2>

<!-- LKG and UKG Timetable (Half-Day) -->
<h3>LKG</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>
<h3>UKG</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Playtime</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Drawing</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Moral</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Computer</td>
            <td>Holiday</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<!-- 1st to 10th Standard Timetable (Full Day) -->
<h3>1st Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>2nd Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>3rd Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>4th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>5th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>6th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>7th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>8th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>9th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

<h3>10th Standard</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9:00 - 10:00</td>
            <td>English</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Social</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
            <td>Maths</td>
            <td>English</td>
            <td>Social</td>
            <td>Science</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>11:00 - 12:00</td>
            <td>Science</td>
            <td>Social</td>
            <td>English</td>
            <td>Maths</td>
            <td>Kannada</td>
            <td>Hindi</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>12:00 - 1:00</td>
            <td>Social</td>
            <td>Science</td>
            <td>Maths</td>
            <td>English</td>
            <td>Hindi</td>
            <td>Kannada</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>1:00 - 2:00</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Lunch</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>2:00 - 3:00</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Music</td>
            <td>Physical Education</td>
            <td>Computer</td>
            <td>Drawing</td>
            <td>Holiday</td>
        </tr>
        <tr>
            <td>3:00 - 4:00</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Drawing</td>
            <td>Computer</td>
            <td>Physical Education</td>
            <td>Music</td>
            <td>Holiday</td>
        </tr>
    </tbody>
</table>

</div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
