<!DOCTYPE html>
<html>
<head>
    <title>Register Customer</title>
</head>
<body>
    <h1>Register Customer</h1>
    <form action="/register-customer" method="POST">
        @csrf
        <label for="CustomerID">Customer ID:</label>
        <input type="text" id="CustomerID" name="CustomerID" required><br>

        <label for="CompanyName">Company Name:</label>
        <input type="text" id="CompanyName" name="CompanyName" required><br>

        <label for="ContactName">Contact Name:</label>
        <input type="text" id="ContactName" name="ContactName" required><br>

        <label for="ContactTitle">Contact Title:</label>
        <input type="text" id="ContactTitle" name="ContactTitle" required><br>

        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address" required><br>

        <label for="City">City:</label>
        <input type="text" id="City" name="City" required><br>

        <label for="Region">Region:</label>
        <input type="text" id="Region" name="Region" required><br>

        <label for="PostalCode">Postal Code:</label>
        <input type="text" id="PostalCode" name="PostalCode" required><br>

        <label for="Country">Country:</label>
        <input type="text" id="Country" name="Country" required><br>

        <label for="Phone">Phone:</label>
        <input type="text" id="Phone" name="Phone" required><br>

        <label for="Fax">Fax:</label>
        <input type="text" id="Fax" name="Fax"><br>

        <button type="submit">Register Customer</button>
    </form>
</body>
</html>
