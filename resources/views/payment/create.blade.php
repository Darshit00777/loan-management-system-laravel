<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/payment">Display</a>

    <h2>EMI Payment</h2>

    <br/>

    <form action="/payment/store" method="POST" >
        @csrf

        <label>Select Loan</label>
    <select name="loan_id">
        <option value="">Select loan</option>
        @foreach($loans as $l)
            <option value="{{$l->id}}">
                {{$l->cname}}
            </option>
        @endforeach
    </select>

    @error('loan_id')
        <p style="color: red;">{{$message}}</p>
    @enderror

    <br><br>

    <label>Select EMI Month</label>
    <select name="emi_id">
        <option value="">Select EMI Month</option>
        @foreach($emis as $e)
            <option value="{{$e->id}}">
                Customer {{$e->loan->cname}} - Month {{$e->month}}
            </option>
        @endforeach
    </select>

    @error('emi_id')
        <p style="color: red;">{{$message}}</p>
    @enderror

    <br><br>

    <label>Due Date</label>
    <input type="date" name="duedate">

    @error('duedate')
        <p style="color: red;">{{$message}}</p>
    @enderror

    <br><br>

    <label>Payment Date</label>
    <input type="date" name="pdate">

    @error('pdate')
        <p style="color: red;">{{$message}}</p>
    @enderror

    <br><br>

    <button type="submit">Pay EMI</button>
</form>
</body>
</html>