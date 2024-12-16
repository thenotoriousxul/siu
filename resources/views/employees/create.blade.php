<!DOCTYPE html>
<html>
<head>
    <title>Register Employee</title>
</head>
<body>
    <h1>Register Employee</h1>
    <form action="/register-employee" method="POST">
        @csrf
        <label for="FirstName">First Name:</label>
        <input type="text" id="FirstName" name="FirstName" required><br>

        <label for="LastName">Last Name:</label>
        <input type="text" id="LastName" name="LastName" required><br>

        <label for="Title">Title:</label>
        <input type="text" id="Title" name="Title" required><br>

        <label for="BirthDate">Birth Date:</label>
        <input type="date" id="BirthDate" name="BirthDate" required><br>

        <label for="HireDate">Hire Date:</label>
        <input type="date" id="HireDate" name="HireDate" required><br>

        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address" required><br>

        <label for="City">City:</label>
        <input type="text" id="City" name="City" required><br>

        <label for="Region">Region:</label>
        <input type="text" id="Region" name="Region"><br>

        <label for="PostalCode">Postal Code:</label>
        <input type="text" id="PostalCode" name="PostalCode" required><br>

        <label for="Country">Country:</label>
        <input type="text" id="Country" name="Country" required><br>

        <label for="HomePhone">Home Phone:</label>
        <input type="text" id="HomePhone" name="HomePhone" required><br>

        <label for="Extension">Extension:</label>
        <input type="text" id="Extension" name="Extension"><br>

        <label for="Notes">Notes:</label>
        <textarea id="Notes" name="Notes"></textarea><br>

        <label for="PhotoPath">Photo Path:</label>
        <input type="text" id="PhotoPath" name="PhotoPath"><br>

        <label for="ReportsTo">Reports To:</label>
        <input type="number" id="ReportsTo" name="ReportsTo"><br>

        <button type="submit">Register Employee</button>
    </form>
</body>
</html>
