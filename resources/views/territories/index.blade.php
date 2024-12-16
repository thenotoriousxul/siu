<!DOCTYPE html>
<html>
<head>
    <title>Territories List</title>
</head>
<body>
    <h1>Territories List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Territory ID</th>
                <th>Territory Description</th>
                <th>Region ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($territories as $territory)
                <tr>
                    <td>{{ $territory->TerritoryID }}</td>
                    <td>{{ $territory->TerritoryDescription }}</td>
                    <td>{{ $territory->RegionID }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>