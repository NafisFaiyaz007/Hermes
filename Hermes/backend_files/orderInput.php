<?php
include("db_connection.php");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$job = $_POST["job_id"];
$salary = $_POST["salary"];
$comm = $_POST["commission"];
$manager_id = $_POST["manager_id"];
$department_id = $_POST["department_id"];
$date = $_POST["hire_Date"];

$sql = "INSERT INTO `employees` (`Employee_Id`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Hire_Date`, `Job_Id`, `Salary`, `Commission_pct`, `Manager_id`, `Department_id`) VALUES ('NULL', '$fname', '$lname', '$email', '$phone', '$date' ,'$job', '$salary', '$comm', '$manager_id', '$department_id')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: employees.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
