<!DOCTYPE html>
<html>
<head>
    <title>Employees List</title>
</head>
<body>
    <h1>Employees List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Title</th>
                <th>Birth Date</th>
                <th>Hire Date</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Home Phone</th>
                <th>Extension</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->FirstName }}</td>
                    <td>{{ $employee->LastName }}</td>
                    <td>{{ $employee->Title }}</td>
                    <td>{{ $employee->BirthDate }}</td>
                    <td>{{ $employee->HireDate }}</td>
                    <td>{{ $employee->Address }}</td>
                    <td>{{ $employee->City }}</td>
                    <td>{{ $employee->Region }}</td>
                    <td>{{ $employee->PostalCode }}</td>
                    <td>{{ $employee->Country }}</td>
                    <td>{{ $employee->HomePhone }}</td>
                    <td>{{ $employee->Extension }}</td>
                    <td>{{ $employee->Notes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>