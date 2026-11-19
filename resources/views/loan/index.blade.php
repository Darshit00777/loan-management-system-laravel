<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>

    <a href="/loan/create">Add Loan</a>

    <br/><br/>
    <h2>Diaplay data</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Interest % </th>
            <th>Tenure</th>
            <th>Process fees % </th>
            <th>Start Date</th>
            <th>Process Fees Amt</th>
            <th>EMI</th>
            
        </tr>

        @foreach($loans as $ln)
            <tr>
                <td>{{$ln -> cname}}</td>
                <td>{{$ln -> lamount}}</td>
                <td>{{$ln -> irate}}</td>
                <td>{{$ln -> tenure}}</td>
                <td>{{$ln -> pfees}}</td>
                <td>{{$ln -> sdate}}</td>
                <td>{{$ln -> pfees_amt}}</td>
                <td>{{$ln -> emi}}</td>
                
            </tr>

            
        @endforeach
    </table>

    <br/>

    <a href="/emi/index">Emi section</a>
    <a href="/payment">Payment section</a>
    <a href="/summary/">Summary</a>
</body>
</html>