<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Lab Management</h1>
    <table>
        <tr>
            <th >ID</th>  
            <th >Garden Name</th>  
            <th >Abbreviation</th>  
            <th >location</th>  
        </tr>
        @foreach($gardens as $garden)
        <tr>
            <td>{{$garden->id}}</td>
            <td>{{$garden->garden_name}}</td>
            <td>{{$garden->abbreviation}}</td>
            <td>{{$garden->localtion}}</td>
        </tr>
        @endforeach
    </table>




</body>
</html>