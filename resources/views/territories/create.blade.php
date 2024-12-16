<!DOCTYPE html>
<html>
<head>
    <title>Register Territory</title>
</head>
<body>
    <h1>Register Territory</h1>
    <form action="/register-territory" method="POST">
        @csrf
        <label for="TerritoryID">Territory ID:</label>
        <input type="text" id="TerritoryID" name="TerritoryID" required><br>

        <label for="TerritoryDescription">Territory Description:</label>
        <input type="text" id="TerritoryDescription" name="TerritoryDescription" required><br>

        <label for="RegionID">Region ID:</label>
        <input type="text" id="RegionID" name="RegionID" required><br>

        <button type="submit">Register Territory</button>
    </form>
</body>
</html>
