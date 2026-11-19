<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Loan Summary - {{$l->cname}}</h2>

    <h3>Total Paid: ₹{{$totalPaid}}</h3>

    <h3>Remaining Balance: ₹{{$remainingBalance}}</h3>

    <h3>Total Late Fees: ₹{{$totalLateFees}}</h3>

    <h3>Next EMI Due: {{$nextDue}}</h3>

    <br/>
    <a href="/payment">Payment section</a>
</body>
</html>