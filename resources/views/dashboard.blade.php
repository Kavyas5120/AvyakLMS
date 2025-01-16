
@extends('layouts.app')
@section('content')
<!-- Main Content -->       
        <div class="content">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f8f9fa;
        }

        

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #343a40;
        }

        .card p {
            margin: 0;
            font-size: 14px;
            color: #6c757d;
        }

        .graph {
            height: 200px;
            background: linear-gradient(135deg, #6c757d, #adb5bd);
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 16px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }

        .table th {
            background-color: #f8f9fa;
            color: #000042;
        }
        .pie-chart {
            width: 150px;
            height: 150px;
            background: conic-gradient(
                #2831a7 40% 60%, 
         rgb(188, 31, 46) 60% 100%
            );
            border-radius: 50%;
            margin: 0 auto;
        }
        .pie-charts {
            width: 150px;
            height: 150px;
            background: conic-gradient(
rgb(40, 140, 167) 70% 30%, 
         rgb(173, 32, 86) 30% 100%
            );
            border-radius: 50%;
            margin: 0 auto;
        }

        .pie-chartss {
            width: 150px;
            height: 150px;
            background: conic-gradient(
rgb(167, 110, 40) 85% 15%, 
         rgb(173, 32, 77) 15% 100%
            );
            border-radius: 50%;
            margin: 0 auto;
        }

        .pie-labels {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .label {
            margin: 0 10px;
            font-size: 14px;
        }

        .label span {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-right: 5px;
            border-radius: 2px;
        }

        .label .active {
            background-color: #2831a7;
        }

        .label .inactive {
            background-color:rgba(220, 53, 70, 0.84);
        }
        .label .aactive {
            background-color: rgb(40, 140, 167);
        }

        .label .ainactive {
            background-color:rgb(173, 32, 86);
        }
        .label .active {
            background-color: #2831a7;
        }

        .label .iinactive {
            background-color:rgb(167, 110, 40);
        }

    </style>
</head>
<body>
    <h2 style="color:rgb(113, 99, 69);">Dashboard</h2>

    <div class="container">
        <!-- Students Card -->
        <div class="card">
            <h3>Students</h3>
            <p>Total Students: 60</p>
            <p>Boys: 35 | Girls: 25</p>
            <div class="pie-chart"></div>
            <div class="pie-labels">
                <div class="label"><span class="active"></span>Boys</div>
                <div class="label"><span class="inactive"></span>Girls</div>
            </div>
        </div>

        <div class="card">
            <h3>Staffs</h3>
            <p>Operative Staff: 15 | Non-Operative Staff: 4</p></br>
            <div class="pie-charts"></div>
            <div class="pie-labels">
                <div class="label"><span class="aactive"></span>Operative Staff</div>
                <div class="label"><span class="ainactive"></span>Non-Operative Staff</div>
            </div>
        </div>

        <div class="card">
            <h3>Parents</h3>
            <p>Total Students: 60</p>
            <p>Acive: 10 | Inactive: 50</p>
            <div class="pie-chartss"></div>
            <div class="pie-labels">
                <div class="label"><span class="inactive"></span>Active</div>
                <div class="label"><span class="iinactive"></span>Inactive</div>
            </div>
        </div>

        <!-- Parents Card -->
        

        <!-- Exams and Grades Graph -->
        
        <!-- Fees Structure Table -->
        <div class="card">
            <h3>Fees Structure</h3>
            </br>
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
        </div>

        <!-- Class Timetable -->
       

        
          

        <!-- Salary and Expenses Graph -->
        <div class="card">
    
            <h3>Management Expenses</h3>
            </br>
            <table class="table table-bordered  mt-4" >
    <thead>
        <tr>
            <th>Amount</th>
            <th>Source</th>
            <th>Remarks</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>₹500</td>
            <td>School Maintenance</td>
            <td>Repaired classroom furniture</td>
        </tr>
        <tr>
            <td>₹1,200</td>
            <td>Annual Event</td>
            <td>Purchased decorations and prizes</td>
        </tr>
        <tr>
            <td>₹800</td>
            <td>Labor Wages</td>
            <td>Paid for cleaning and security staff</td>
        </tr>
        <tr>
            <td>₹600</td>
            <td>Library Upgrade</td>
            <td>New books and digital materials</td>
        </tr>
        <tr>
            <td>₹1,000</td>
            <td>Sports Day</td>
            <td>Equipment and refreshments</td>
        </tr>
        <tr>
            <td>₹700</td>
            <td>IT Infrastructure</td>
            <td>Purchased new software licenses</td>
        </tr>
        <tr>
            <td>₹450</td>
            <td>Utility Bills</td>
            <td>Electricity and water charges</td>
        </tr>
        <tr>
            <td>₹300</td>
            <td>Transport</td>
            <td>Fuel for school buses</td>
        </tr>
        <tr>
            <td>₹950</td>
            <td>Student Welfare</td>
            <td>Scholarships and support materials</td>
        </tr>
        <tr>
            <td>₹1,500</td>
            <td>Building Renovation</td>
            <td>Repainting and structural repairs</td>
        </tr>
    </tbody>
</table>

        </div>

        <!-- Event Calendar -->
        <div class="card">
            <h3>Event Calendar</h3>
            </br>
        <table class="table table-bordered  mt-4">
        <thead>
            <tr>
                <th class="text-white bg-secondary">Occasion</th>
                <th class="text-white bg-secondary">Date</th>
                <th class="text-white bg-secondary">Day</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>New Year’s Day</td>
                <td>January 1</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Guru Gobind Singh’s Birthday</td>
                <td>January 6</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>Makar Sankranti / Magha Bihu / Pongal / Hazarat Ali’s Birthday</td>
                <td>January 14</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>Basant Panchami / Sri Panchami</td>
                <td>February 2</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>Guru Ravi Das’s Birthday</td>
                <td>February 12</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Shiva Ji Jayanti</td>
                <td>February 19</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Swami Dayananda Saraswati Jayanti</td>
                <td>February 23</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>Holika Dahan</td>
                <td>March 13</td>
                <td>Thursday</td>
            </tr>
            <tr>
                <td>Dolayatra</td>
                <td>March 14</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Jumat-ul-Vida</td>
                <td>March 28</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Chaitra Sukladi / Gudi Padava / Ugadi / Cheti Chand</td>
                <td>March 30</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>Ram Navmi</td>
                <td>April 6</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>Vaisakhi / Vishu</td>
                <td>April 13</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>Puthandu (Tamil New Year’s Day)</td>
                <td>April 14</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>Vaishakhadi (Bengal)/ Bahag Bihu (Assam)</td>
                <td>April 15</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>Easter Sunday</td>
                <td>April 20</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>Guru Rabindranath’s Birthday</td>
                <td>May 9</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Rath Yatra</td>
                <td>June 27</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Raksha Bandhan</td>
                <td>August 9</td>
                <td>Saturday</td>
            </tr>
            <tr>
                <td>Parsi New Year’s Day / Nauraj</td>
                <td>August 15</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Janmashtami (Smarta)</td>
                <td>August 15</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Ganesh Chaturthi / Vinayaka Chaturthi</td>
                <td>August 27</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Onam or Thiru Onam Day</td>
                <td>September 5</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Dussehra (Saptami)</td>
                <td>September 29</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>Dussehra (Mahashtami)</td>
                <td>September 30</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>Dussehra (Mahanavmi)</td>
                <td>October 1</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Maharishi Valmiki’s Birthday</td>
                <td>October 07</td>
                <td>Thursday</td>
            </tr>
            <tr>
                <td>Karaka Chaturthi (KarwaChouth)</td>
                <td>October 10</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>Naraka Chaturdasi</td>
                <td>October 20</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>Govardhan Puja</td>
                <td>October 22</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Bhai Duj</td>
                <td>October 23</td>
                <td>Thursday</td>
            </tr>
            <tr>
                <td>Pratihar Shashthi or Surya Shashthi (Chhat Puja)</td>
                <td>October 28</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>Guru Teg Bahadur’s Martyrdom Day</td>
                <td>November 24</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>Christmas Eve</td>
                <td>December 24</td>
                <td>Wednesday</td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</body>
</html>
     
            
        </div>
        
    </div>
    
    <!-- Bootstrap Bundle with Popper -->
@endsection() 


