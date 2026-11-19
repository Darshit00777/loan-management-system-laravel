<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Monthly EMI Schedule</h2>

    <table border="1">
    <tr>
        <th>Name</th>
        <th>Amount</th>
        <th>Tenure</th>
        <th>EMI</th>
        <th>Action</th>
    </tr>

    @foreach($loans as $l)
    <tr>
        <td>{{ $l->cname }}</td>
        <td>{{ $l->lamount }}</td>
        <td>{{ $l->tenure }}</td>
        <td>{{ $l->emi }}</td>
        <td>
            <a href="/emi/generate/{{ $l->id }}">Generate Schedule</a>
            |
            <a href="/emi/schedule/{{ $l->id }}">View Schedule</a>
        </td>
    </tr>
    @endforeach
</table>

<br/>
<a href="/loan">loan Section</a>
<br/>
<a href="/payment">Payment section</a>
<a href="/summary/">Summary</a>
</body>
</html>