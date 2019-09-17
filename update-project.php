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
    $marriage = $_POST['Marriage'];
    $t_name = $_POST['T-Name']; 
    $t_member = $_POST['T-Member'];
    $p_name = $_POST['P-Name'];
    $p_duration = $_POST['P-Duration'];
    
    $sql = "UPDATE project_table SET EMP_NO='$emp_no', MARRIAGE_STATUS='$marriage', TEAM_NAME='$t_name', TEAM_MEMBERS='$t_member', PROJECT_NAME='$p_name', PROJECT_DURATION='$p_duration' WHERE emp_no='$emp_no'";
     
    //print_r($sql);
    //exit;

    if (mysqli_query($conn,$sql)){
        mysqli_close($conn);
        header('Location: show-project.php');
        exit;
    }else{
        echo "Error updating record:". mysqli_error($conn);
    } 

?>
