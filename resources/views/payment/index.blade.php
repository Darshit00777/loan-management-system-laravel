<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/payment/create">Add Payment</a>

    <br/><br/>
    <h2>Diaplay data</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Emi Month</th>
            <th>due date</th>
            <th>payment date</th>
            <th>late day </th>
            <th>late fees</th>
        </tr>

        @foreach($payments as $py)
            <tr>
                <td>{{$py -> loan -> cname}}</td>
                <td>{{$py -> emi -> month}}</td>
                <td>{{$py -> duedate}}</td>
                <td>{{$py -> pdate}}</td>
                <td>{{$py -> lday}}</td>
                <td>{{$py -> lfee}}</td>
                
            </tr>
        @endforeach
    </table>

    <br/>

    <a href="/emi/index">Emi section</a>
    <a href="/loan">loan section</a>
    <a href="/summary/show/">Summary</a>
</body>
</html>