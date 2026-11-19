<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>EMI Schedule Report</h2>

<table border="1">
    <tr>
        <th>Month</th>
        <th>EMI</th>
        <th>Interest</th>
        <th>Principal</th>
        <th>Remaining Principal</th>
    </tr>

    @foreach($schedules as $e)
    <tr>
        <td>{{ $e->month }}</td>
        <td>{{ $e->emi }}</td>
        <td>{{ $e->i_component }}</td>
        <td>{{ $e->p_component }}</td>
        <td>{{ $e->r_principal }}</td>
    </tr>
    @endforeach
</table>

<br/>
<a href="/emi/index">Go to index</a>
</body>
</html>