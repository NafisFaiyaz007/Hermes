<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Search result page">
    <link rel="stylesheet" type = "text/css" href="style.css">
    <link rel="stylesheet" type = "text/css" href="bg.css">


    <title> Order Status </title>
  </head>
  <h1 id = "MainTitle01"> Hermes Delivery Database </h1>
  <hr id="hr01">


  <body class="facny-bg">
    Hello, welcome to the portal!
    <div>
    <ul id="boxes">
      <a href="tables/location.php"><li>Locations</li></a>
      <a href="#"><li>Orders</li></a>
      <a href="#"><li>Billing</li></a>
      <a href="#"><li>Customer</li></a>
      <a href="#"><li>Product</li></a>
      <a href="tables/merchant.php"><li>Merchant</li></a>
    </ul>
    </div>
    <hr>
    <br>
    
    <div style="margin-top: 150px">
      <form method="post" action="backend_files/search_result.php">
      <label for="orderid_input"> Type your order ID here: </label>
      <input type="text" name="orderid_input">
      <input type="submit" value="search" style="margin-left: 10px; margin-top: 20px;">
      </form> 
    </div>

  <div style="margin-top: 50px">
      <form method="post" action="backend_files/create_order.php">
      <p><strong>Create New Order</strong></p>
        <label> Order Id </label>
        <input type="text" name="orderID" placeholder="123456">
        <br>

        <label> Customer ID </label>
            <select id="customerID" name="customerID">
              <?php
              include_once("/backend_files/db_connection.php");
              session_start();
              $sql = "SELECT DISTINCT customerID FROM `customer` ORDER BY Employee_Id DESC";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_row($result)){
                ?>
                <option value="<?php echo $row[0]?>"> <?php echo $row[0]?> </option>
                <?php
              }
              ?>
            </select>
        <br>

        <label> Product ID </label>
            <select id="productID" name="productID">
              <?php
              include_once("backend_files/db_connection.php");
              session_start();
              $sql = "SELECT DISTINCT job_id FROM `jobs`";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_row($result)){
                ?>
                <option value="<?php echo $row[0]?>"> <?php echo $row[0]?> </option>
                <?php
              }
              ?>
            </select>
        <br>
        <label> Location ID </label>
        <select id="locationID" name="locationID">
              <?php
              include_once("/backend_files/db_connection.php");
              session_start();
              $sql = "SELECT DISTINCT locationID FROM `location` ORDER BY Employee_Id DESC";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_row($result)){
                ?>
                <option value="<?php echo $row[0]?>"> <?php echo $row[0]?> </option>
                <?php
              }
              ?>
            </select>
        <br>
        <input type="submit" value="Submit " style="margin-left: 30%;">
      </form> 
    </div>

    <br>
  </body>


</html>
