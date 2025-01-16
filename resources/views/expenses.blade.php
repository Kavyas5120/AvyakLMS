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
@extends('layouts.app')
@section('content')
<div class="content">
<div class="container">
    <h2>Expenditure Calculations</h2>
    <form method="POST" action="{{route('Expense.store')}}">
        @csrf
    <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount" placeholder="Enter Amount Spent" required>
        </div>
        <div class="form-group">
            <label for="annualFees">Source</label>
            <input type="text" class="form-control" name="source" placeholder="Enter Source" required>
        </div>

        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea class="form-control" name="remarks" rows="3" placeholder="Enter remarks"  required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

</div>

<!-- Bootstrap JS Bundle -->

<div class="container mt-5" id="abc">
    <h2 class="text-center">Expenses of the Year</h2>
    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th>SL.NO</th>
                <th>Amount</th>
                <th>Source</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exps as $ee)
            <tr><td>{{$ee->id}}</td>
                <td>{{$ee->amount}}</td>
                <td>{{$ee->source}}</td>
                <td>{{$ee->remarks}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
</div>
@endsection

