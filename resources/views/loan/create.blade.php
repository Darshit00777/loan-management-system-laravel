<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h2>Add Loan Details</h2>
    <br/>

    <form action="/loan/store" method="POST">
        @csrf

        <label>Customer Name :</label>
        <input type="text" name="cname" />
        @error('cname')
            <p style="color: red;">{{$message}}</p>
        @enderror

        <br/><br/>

        <label>Loan Amount : </label>
        <input type="number" name="lamount" />
        @error('lamount')
            <p style="color: red;">{{$message}}</p>
        @enderror

        <br/><br/>

        <label>Interest Rate : </label>
        <input type="number" name="irate" />
        @error('irate')
            <p style="color: red;">{{$message}}</p>
        @enderror

        <br/><br/>

        <label>Tesure in Month : </label>
        <input type="number" name="tenure" />
        @error('tenure')
            <p style="color: red;">{{$message}}</p>
        @enderror

        <br/><br/>

        <label>Processing fees : </label>
        <input type="number" name="pfees" />
        @error('pfees')
            <p style="color: red;">{{$message}}</p>
        @enderror

        <br/><br/>

        <label>Loan Start Date : </label>
        <input type="date" name="sdate" />
        @error('sdate')
            <p style="color: red;">{{$message}}</p>
        @enderror

        <br/><br/>

        <button type="submit">Insert</button>
    </form>
</body>
</html>