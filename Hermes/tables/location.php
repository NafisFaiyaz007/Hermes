<?php
$link = mysqli_connect("localhost", "root", "", "hermes");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM location";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Location ID</th>";
                echo "<th>Street Address</th>";
                echo "<th>City</th>";
                echo "<th>Postal Code</th>";
                echo "<th>State</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['locationID'] . "</td>";
                echo "<td>" . $row['streetAddress'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['postalCode'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
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