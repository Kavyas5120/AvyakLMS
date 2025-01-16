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
    

</div>

<!-- Bootstrap JS Bundle -->

<div class="container mt-5" id="abc">
    <h2 class="text-center">Fees Structure for Students (UKG to 10th Standard)</h2>
    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th>Class</th>
                <th>Annual Fees (INR)</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>UKG</td>
                <td>₹45,000</td>
                <td>Includes basic fees for play and learning</td>
            </tr>
            <tr>
                <td>LKG</td>
                <td>₹50,000</td>
                <td>Includes play-based learning materials</td>
            </tr>
            <tr>
                <td>1st Grade</td>
                <td>₹55,000</td>
                <td>Standard tuition and study materials</td>
            </tr>
            <tr>
                <td>2nd Grade</td>
                <td>₹60,000</td>
                <td>Standard tuition and study materials</td>
            </tr>
            <tr>
                <td>3rd Grade</td>
                <td>₹70,000</td>
                <td>Includes activities and co-curriculars</td>
            </tr>
            <tr>
                <td>4th Grade</td>
                <td>₹80,000</td>
                <td>Includes physical education and clubs</td>
            </tr>
            <tr>
                <td>5th Grade</td>
                <td>₹90,000</td>
                <td>Includes advanced study materials</td>
            </tr>
            <tr>
                <td>6th Grade</td>
                <td>₹110,000</td>
                <td>Includes subject-specific kits and activities</td>
            </tr>
            <tr>
                <td>7th Grade</td>
                <td>₹120,000</td>
                <td>Includes special learning sessions</td>
            </tr>
            <tr>
                <td>8th Grade</td>
                <td>₹130,000</td>
                <td>Includes career and skill development</td>
            </tr>
            <tr>
                <td>9th Grade</td>
                <td>₹150,000</td>
                <td>Prepares students for secondary education exams</td>
            </tr>
            <tr>
                <td>10th Grade</td>
                <td>₹250,000</td>
                <td>Includes preparatory courses for board exams, extracurricular activities</td>
            </tr>
        </tbody>
    </table>

    <h3 class="mt-5">Additional Fees</h3>
    <ul>
        <li><strong>Transport Fees</strong>: ₹10,000 to ₹20,000 (optional based on distance)</li>
        <li><strong>Examination Fees</strong>: ₹5,000 to ₹15,000 (depending on class)</li>
        <li><strong>Activity Fees</strong>: ₹3,000 to ₹8,000 (for co-curricular activities)</li>
        <li><strong>Library Fees</strong>: ₹2,000 to ₹4,000</li>
        <li><strong>Uniform Fees</strong>: ₹4,000 to ₹6,000 (depending on class)</li>
    </ul>
</div>
</div>
@endsection

