<!DOCTYPE html>
<html>
<head>
    <title>Register Order</title>
</head>
<body>
    <div class="container">
        <h2>Register Order</h2>

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <!-- Información de la orden -->
            <div class="form-group">
                <label for="CustomerID">Customer ID</label>
                <input type="text" class="form-control" id="CustomerID" name="CustomerID" required>
            </div>

            <div class="form-group">
                <label for="EmployeeID">Employee ID</label>
                <input type="text" class="form-control" id="EmployeeID" name="EmployeeID" required>
            </div>

            <div class="form-group">
                <label for="OrderDate">Order Date</label>
                <input type="date" class="form-control" id="OrderDate" name="OrderDate" required>
            </div>

            <div class="form-group">
                <label for="RequiredDate">Required Date</label>
                <input type="date" class="form-control" id="RequiredDate" name="RequiredDate" required>
            </div>

            <div class="form-group">
                <label for="ShippedDate">Shipped Date</label>
                <input type="date" class="form-control" id="ShippedDate" name="ShippedDate">
            </div>

            <div class="form-group">
                <label for="ShipVia">Ship Via</label>
                <input type="text" class="form-control" id="ShipVia" name="ShipVia" required>
            </div>

            <div class="form-group">
                <label for="Freight">Freight</label>
                <input type="text" class="form-control" id="Freight" name="Freight" required>
            </div>

            <div class="form-group">
                <label for="ShipName">Ship Name</label>
                <input type="text" class="form-control" id="ShipName" name="ShipName" required>
            </div>

            <h3>Order Detail</h3>
            <div class="order-detail">
                <div class="form-group">
                    <label for="ProductID">Product ID</label>
                    <input type="text" class="form-control" name="OrderDetails[0][ProductID]" required>
                </div>

                <div class="form-group">
                    <label for="UnitPrice">Unit Price</label>
                    <input type="number" class="form-control" name="OrderDetails[0][UnitPrice]" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="Quantity">Quantity</label>
                    <input type="number" class="form-control" name="OrderDetails[0][Quantity]" required>
                </div>

                <div class="form-group">
                    <label for="Discount">Discount</label>
                    <input type="number" class="form-control" name="OrderDetails[0][Discount]" step="0.01" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</body>
</html>
