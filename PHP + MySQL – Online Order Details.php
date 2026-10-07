<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "shop"
);

if(!$conn) {
    die("Database connection failed");
}

$result = mysqli_query(
    $conn,
    "SELECT * FROM orders"
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Online Orders</title>

    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background: lightgray;
        }
    </style>
</head>

<body>

<h2>Online Order Details</h2>

<table>

<tr>
    <th>Order ID</th>
    <th>Product</th>
    <th>Quantity</th>
    <th>Price</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)) {

?>

<tr>

<td><?php echo $row["order_id"]; ?></td>

<td><?php echo $row["product"]; ?></td>

<td><?php echo $row["quantity"]; ?></td>

<td><?php echo $row["price"]; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>

<?php
mysqli_close($conn);
?>
