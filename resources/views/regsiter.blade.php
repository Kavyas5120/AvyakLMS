<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsiter User</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: url('images/login.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            font-family: 'Arial', sans-serif;
            padding: 50px;
        }
        .login-card {

            background: linear-gradient(135deg, #000068, #000042, #000082);
            border-radius: 15px;
            height:min-content ;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 70px;
            max-width: 600px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
        }
         
    </style>
</head>
<body>
    <div class="login-card">

        <h3 class="text-white py-5">Regsiter User</h3>
        <form method="POST" action="{{ route('regsiter') }}">
        @csrf 
        <div class="mb-3 form-group pb-2">
                <input type="text"  class="form-control" placeholder="Enter your Name" required name="name" autofocus>
                
            </div>
            <div class="mb-3 form-group pb-2">
                <input type="email"  class="form-control" placeholder="Enter your email" required name="email" autofocus>
                
            </div>
            <div class="mb-3 form-group pb-3">
                <input type="password"  class="form-control" placeholder="Enter your password" required name="password">
                

            </div>
            <button type="submit" class="btn btn-secondary text-white px-3 py-2">Register</button>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
