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
    <h1>List of Plants</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Plant Name</th>  
            <th>Scientific Name</th>  
            <th>Garden Name</th>  
        </tr>
        @foreach($plants as $plant)
            <tr>
                <td>{{ $plant->id }}</td>
                <td>{{ $plant->plant_name }}</td>
                <td>{{ $plant->scientific_name }}</td>
                <td>{{ $plant->garden->garden_name}} </td>
            </tr>
        @endforeach
    </table>


</body>
</html>