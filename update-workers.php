<?php
    //connectivity

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dp = "employee";

    $conn = mysqli_connect($servername, $username, $password, $dp);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $emp_no = $_POST['Emp-no'];
    $gender = $_POST['Gender'];
    $department = $_POST['Department']; 
    $system_no = $_POST['System-no'];
    $vehicle = $_POST['Vehicle'];
    $language = $_POST['Language'];
    
    $sql = "UPDATE work_table SET EMP_NO='$emp_no', GENDER='$gender', DEPARTMENT='$department', SYSTEM_NO='$system_no', BY_VEHICLE='$vehicle', LANGUAGE_KNOWN='$language' WHERE emp_no='$emp_no'";
    //print_r($sql);
    //exit; 

    if (mysqli_query($conn,$sql)){
        mysqli_close($conn);
        header('Location: show-workers.php');
        exit;
    }else{
        echo "Error updating record:". mysqli_error($conn);
    } 

?>
