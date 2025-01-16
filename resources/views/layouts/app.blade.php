<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden; /* Prevents the entire page from scrolling */
        }
        .dashboard {
            display: flex;
            height: 100vh;
        }
        .navbar {
            width: 15%;
            background: #000042;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px 10px;
            overflow-y:scroll; /* Enables scrolling for the navbar */
        }
        .navbar h4 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .navbar ul {
            list-style: none;
            padding: 0;
        }
        .navbar ul li {
            margin: 15px 0;
            text-align: center;
        }
        .navbar ul li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 600;
            padding: 10px;
            display: block;
            border-radius: 8px;
            transition: background 0.3s ease;
        }
        .navbar ul li a:hover {
            background: #be9f5c;
            color: #ffffff;
        }
        .content {
            width: 85%;
            padding: 20px;
            background: #f8f9fa;
            overflow-y: auto; /* Enables scrolling for the main content */
        }
        .content h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
        .content .card {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
         /* Styling for scrollbars */
    .navbar, .content {
    scrollbar-width: thin; /* For Firefox */
    scrollbar-color: white; /* Thumb color and track color */
    }

            /* Scrollbar styling for WebKit-based browsers */
            .navbar::-webkit-scrollbar,
            .content::-webkit-scrollbar {
                width: 8px; /* Width of the scrollbar */
            }

            .navbar::-webkit-scrollbar-track,
            .content::-webkit-scrollbar-track {
                background: #000042; /* Track color */
                border-radius: 10px; /* Rounded edges for the track */
            }

            .navbar::-webkit-scrollbar-thumb,
            .content::-webkit-scrollbar-thumb {
                background: #be9f5c; /* Thumb color */
                border-radius: 10px; /* Rounded edges for the thumb */
                border: 2px solid #000042; /* Adds space between the thumb and track */
            }

            .navbar::-webkit-scrollbar-thumb:hover,
            .content::-webkit-scrollbar-thumb:hover {
                background: #d4b57d; /* Lighter color on hover */
            }

    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar Navbar -->
        <div class="navbar">
            <img src="images/logo.png" style="height: 80px;" alt="Ayvak">
            <ul>
                <li><a href="{{'dashboard'}}">Dashboard</a></li>
                <li><a href="{{'users'}}">Students</a></li>    
                <li><a href="{{'parents'}}">Parents</a></li>
                <li><a href="{{'exam'}}">Exams and Grades</a></li>
                <li><a href="{{'fees'}}">Fees Structure</a></li>
                <li><a href="{{'time'}}">Class TimeTable</a></li>
                <li><a href="{{'ostaffs'}}">Operative Staff</a></li>
                <li><a href="{{'nostaffs'}}">Non-Operative Staff</a></li>
                <li><a href="{{'salary'}}">Salary</a></li>
                <li><a href="{{'Expense.create'}}">Expenses</a></li>
                <li><a href="{{'event'}}">Event Calender</a></li>
                <li><a href="#" onclick="document.getElementById('postForm').submit(); return false;">Logout</a></li>
                <form id="postForm"  method="POST" action="{{ route('logout') }}">@csrf</form>
            </ul>
        </div>
@yield('content')

<!-- footer -->


    <!-- Bootstrap JS Bundle -->
    
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
