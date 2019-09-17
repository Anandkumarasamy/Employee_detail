
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dp = "employee";
    //print_r($_POST);exit;
    if (! empty($_POST)){
    
        $conn = mysqli_connect($servername, $username, $password, $dp);
        // print_r($conn);exit;

        if (!$conn){
            //echo "Failed to connect to datbase";
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            //echo "Connected successfully";
        }

        $emp_no =$_POST['Emp-no'] ;
        $marriage =$_POST['Marriage'];
        $t_name =$_POST['T-Name'];
        $t_member =$_POST['T-Member'];
        $p_name =$_POST['P-Name'];
        $p_duration =$_POST['P-Duration'].$_POST['Duration'];

        //print_r($_post) ;
        //exit;
        $sql = "INSERT INTO project_table(EMP_NO,MARRIAGE_STATUS,TEAM_NAME,TEAM_MEMBERS,PROJECT_NAME,PROJECT_DURATION) VALUES('$emp_no','$marriage','$t_name','$t_member','$p_name','$p_duration')";

        if(!mysqli_query($conn,$sql)){
            die('Error: ' . mysqli_error($conn));
            printf("Error message:", mysqli_error($conn));
        }else{
            $_SESSION['message'] = "Successfully inserted";
        }    
        mysqli_close($conn);
        header('Location: insert1-personal.php');
    }else{
        //echo "field are empty insert infomation"
    }
?>
