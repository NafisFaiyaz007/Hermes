<?php
$link = mysqli_connect("localhost", "root", "", "hermes");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$orderidq = $_POST['orderid_input'];
 
$sql = "SELECT order_tracking.orderID, customer.customerName, product.productName, order_tracking.orderStatus FROM order_tracking LEFT JOIN customer ON order_tracking.customerID = customer.customerID LEFT JOIN product ON order_tracking.productID = product.productID WHERE orderID = '$orderidq'";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Order ID</th>";
                echo "<th>Customer</th>";
                echo "<th>Product</th>";
                echo "<th>Delivery</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['orderID'] . "</td>";
                echo "<td>" . $row['customerName'] . "</td>";
                echo "<td>" . $row['productName'] . "</td>";
                echo "<td>" . $row['orderStatus'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>