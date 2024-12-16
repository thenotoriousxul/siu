<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container mt-4">
    <h1 class="text-center mb-4">Reporte de Ventas por Empleado</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Empleado ID</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Total Ventas</th>
                <th>Total Venta Valor</th>
                <th>Promedio Venta Valor</th>
                <th>Última Venta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->EmployeeID }}</td>
                <td>{{ $venta->LastName }}</td>
                <td>{{ $venta->FirstName }}</td>
                <td>{{ $venta->total_ventas }}</td>
                <td>{{ number_format($venta->total_venta_valor, 2) }}</td>
                <td>{{ number_format($venta->promedio_venta_valor, 2) }}</td>
                             <td>{{ $venta->ultima_venta }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
