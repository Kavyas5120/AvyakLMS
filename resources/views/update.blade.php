
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
    text-align: left;
    margin-bottom: 20px;
    padding-left: 70px;
    font-size: 24px;
    color: #444;
}

form {
    padding-left: 70px;
    width: 100%;
}

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 15px;
}

.col-md-6, .col-md-12 {
    flex: 1;
    min-width: 480px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 14px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
textarea,
select,
input[type="file"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
    outline: none;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="date"]:focus,
textarea:focus,
select:focus,
input[type="file"]:focus {
    border-color: #007bff;
}

textarea {
    resize: vertical;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.btn-primary {
    background-color: #007bff;
    color: #fff;
}

button.btn-primary:hover {
    background-color: #0056b3;
}

button.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

button.btn-secondary:hover {
    background-color: #5a6268;
}

.text-center {
    text-align: center;
}

.pb-5 {
    padding-bottom: 30px;
}

        </style>
 </head>
 <div class="content">

    <div class="container mt-5">
        <h2 class=" mb-4">Update Student Form</h2>
        
        <form method="POST" action="{{url('update-data/'.$students->id)}}">
            @method('PUT')
        <h3>Personal Details</h3>
            <div class="row mb-3">
                @csrf 
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" value="{{$students->firstName}}" placeholder="Enter your first name" required>
                    @if($errors->has('firstName'))
                    <span class="text-danger"> {{ $errors->first('firstName')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" value="{{$students->lastName}}" placeholder="Enter your last name" required>
                    @if($errors->has('lastName'))
                    <span class="text-danger"> {{ $errors->first('lastName')}}</span>@endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="{{$students->dob}}" required>
                    @if($errors->has('dob'))
                    <span class="text-danger"> {{ $errors->first('dob')}}</span>@endif
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" value="{{$students->gender}}" required>
                        <option value="" selected disabled>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    @if($errors->has('gender'))
                    <span class="text-danger"> {{ $errors->first('gender')}}</span>@endif
                </div>
                
            </div>
            <div class="row mb-3">
            <div class="col-md-6">
                    <label for="year" class="form-label">Class/Grade Applying For
                    </label>
                    <select class="form-control" name="classSelect" value="{{$students->classSelect}}" required>
                        <option value="ukg">UKG</option>
                        <option value="lkg">LKG</option>
                        <option value="1st">1st Grade</option>
                        <option value="2nd">2nd Grade</option>
                        <option value="3rd">3rd Grade</option>
                        <option value="4th">4th Grade</option>
                        <option value="5th">5th Grade</option>
                        <option value="6th">6th Grade</option>
                        <option value="7th">7th Grade</option>
                        <option value="8th">8th Grade</option>
                        <option value="9th">9th Grade</option>
                        <option value="10th">10th Grade</option>
                    </select>
                    @if($errors->has('classSelect'))
                    <span class="text-danger"> {{ $errors->first('classSelect')}}</span>@endif
                </div>  
                
            </div>
            <div class="row mb-3">
            <div class="col-md-6">
                    <label class="form-label">Natioanlity</label>
                    <input type="text" class="form-control" name="nation" value="{{$students->nation}}" required>
                    @if($errors->has('nation'))
                    <span class="text-danger"> {{ $errors->first('nation')}}</span>@endif
                </div> 
                <div class="col-md-6">
                    <label class="form-label">Religion</label>
                    <input type="text" class="form-control" name="religion" value="{{$students->religion}}" required>
                    @if($errors->has('religion'))
                    <span class="text-danger"> {{ $errors->first('religion')}}</span>@endif
                </div>
                
            </div>
            <div class="row mb-3">
            <div class="col-md-6">
                    <label class="form-label">Caste Category</label>
                    <input type="text" class="form-control" name="caste" value="{{$students->caste}}" required>
                    @if($errors->has('caste'))
                    <span class="text-danger"> {{ $errors->first('caste')}}</span>@endif
                </div> 
                <div class="col-md-6">
                    <label class="form-label">Sub-Caste Category</label>
                    <input type="text" class="form-control" name="scaste" value="{{$students->scaste}}" required>
                    @if($errors->has('scaste'))
                    <span class="text-danger"> {{ $errors->first('scaste')}}</span>@endif
                </div>           
            </div>

            <!-- Contact Details -->
            <h3>Contact Details</h3>
            <div class="row mb-3">
            <div class="col-md-6">
                    <label for="nationality" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$students->email}}" placeholder="Enter your Nationality" required>
                    @if($errors->has('email'))
                    <span class="text-danger"> {{ $errors->first('email')}}</span>@endif
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" value="{{$students->phone}}" placeholder="Enter your phone number" required>
                    @if($errors->has('phone'))
                    <span class="text-danger"> {{ $errors->first('phone')}}</span>@endif
                </div>           
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="3" value="{{$students->address}}" placeholder="Enter your address" required></textarea>
                    @if($errors->has('address'))
                    <span class="text-danger"> {{ $errors->first('address')}}</span>@endif
                </div>
            </div>

            <!-- Family Details -->
            <div class="row mb-3">
            <div class="col-md-6">
                    <label for="nationality" class="form-label">Father’s Name</label>
                    <input type="text" class="form-control" name="fname" value="{{$students->fname}}" placeholder="Enter your Father's Name" required>
                    @if($errors->has('fname'))
                    <span class="text-danger"> {{ $errors->first('fname')}}</span>@endif
                </div>
                <div class="col-md-6">
                    <label for="nationality" class="form-label">Mother’s Name</label>
                    <input type="text" class="form-control" name="mname" value="{{$students->mname}}" placeholder="Enter your Mother's Name" required>
                    @if($errors->has('mname'))
                    <span class="text-danger"> {{ $errors->first('mname')}}</span>@endif
                </div>
                
            </div>
            
            
            </br>
            <div class="row">
                <div class="col-md-12 text-center pb-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            
        </form>
    </div>
    </div>
    
</div> 
 
    <!-- Bootstrap Bundle with Popper -->
@endsection()  


