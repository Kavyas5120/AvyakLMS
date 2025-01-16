<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration Form</title>
    <link rel="stylesheet" href="styles.css">
<style>
/* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    
}



h2 {
    text-align: left;
    padding-left: 3%;
    margin-bottom: 20px;
    color: #333;
}

form {
    padding-left: 3%;
    padding-right: 50%;

    flex-direction: column;
}

label {
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

input, select, textarea, button {
    margin-bottom: 20px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}

textarea {
    resize: none;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

</style>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="content">
    <div class="form-container">
        <h2>Teacher Registration Form</h2>
        <form method="POST" action="{{route('stores')}}" >
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder="Enter First Name" required>
            @csrf
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="qualification" placeholder="Enter Qualification" required>

            <label for="position">Position Applied For:</label>
            <input type="text" id="position" name="position" placeholder="e.g., Mathematics Teacher" required>

            

            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" placeholder="Enter Expected Salary" required>

            <label for="staffType">Staff Type:</label>
            <select id="staffType" name="staffType" required>
                <option value="">Select Staff Type</option>
                <option value="operative">Operative</option>
                <option value="non-operative">Non-Operative</option>
            </select>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email Address" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" placeholder="Enter Full Address" required></textarea>


            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
</body>
</html>
