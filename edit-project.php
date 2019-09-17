<?php
$id=$_GET['id'];
//connectivity
$servername = "localhost";
$username = "root";
$password = "root";
$dp = "employee";

$conn = mysqli_connect($servername, $username, $password, $dp);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    // echo "Connection is done";
}

$sql = "SELECT * FROM project_table where emp_no='$id'"; 
$result = mysqli_query($conn,$sql);

if (count($result) == 1){
    $row=mysqli_fetch_array($result);
    $emp_no=$row['EMP_NO'];
    $marriage=$row['MARRIAGE_STATUS'];
    $t_name=$row['TEAM_NAME'];
    $t_member=$row['TEAM_MEMBERS'];
    $p_name=$row['PROJECT_NAME'];
    $p_duration=$row['PROJECT_DURATION'];    
}
//print_r($p_duration);
//exit;
?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UPDATE</title>
        <!-----------------Bootstrap CDN----------------->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body{
                background: url(https://images.unsplash.com/photo-1473170611423-22489201d919?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);
                background-repeat:no-repeat;
                background-size: cover;
                color: black;
                }
            h1{
                font-family: Calibri; 
                font-size: 25pt;         
                font-style: normal;
                font-weight: bold; 
                color:black;
                text-decoration: underline
            }

            label{
                font-size: 120%;
            }

            .jumbotron {
                margin-top: -20px;
                background: lightskyblue;
                color: black;
                width: 45%;
                height: 500px;
                box-align: left;
            }

            * {
                box-sizing: border-box;
                align-items: center;
            }
            
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            
  
            /* Style the header */
            header {
                background-color: lightseagreen;
                padding: 15px;
                text-align: center;
                font-size: 35px;
            }
            
            /* Create two columns/boxes that floats next to each other */
            nav {
                float: left;
                width: 25%;
                height: 500px; /* only for demonstration, should be removed */
                background: rgb(139, 189, 139);
                text-align: center;
                font-family: Calibri; 
                font-size: 20pt;         
                font-style: normal;
                font-weight: bold; 
                padding: 20px;
                color: blue
            }
            
            /* Style the list inside the menu */
            nav ul {
                list-style-type: none;
                padding: 0;
            }
            article {
                float: left;
                scroll-margin: left:inherit;
                padding: 20px;
                width: 75%;
                height: 300px; /* only for demonstration, should be removed */
            }
            
            /* Clear floats after the columns */
            section:after {
                content: "";
                display: table;
                clear: both;
            }
            
            /* Style the footer */
            footer {
                background-color: lightseagreen;
                padding: 10px;
                font-family: Calibri; 
                font-size: 18pt;         
                font-style: normal;
                text-align: center;
                color: black;
            }
            
            /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
            @media (max-width: 600px) {
                nav, article {
                width: 100%;
                height: auto;
                }
            }
            .button{
                background-color: red; /* Green */
                border: 1;
                padding:5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer; 
                color: white 
            }
        </style>
    </head>

    <body>
        <header><h1>UPDATE PROJECT INFORMATION</h1></header>
        <section>
            <nav>
                <ul>
                    <li><a href="edit-project.php">Update Project-Details</a></li><br>
                    <li><a href="show-project.php">Show Details</a></li><br>
                    <a type='button' class='button' href='admin.php' >
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </ul>
            </nav>
            <article>
                <div class="container" >
                    <div class="jumbotron" align="center">
                        <div class="container" align="center">
                            <form method="post" action="update-project.php" enctype="multipart/form-data" padding: 20px>
                                <table align="center" cellpadding="8">       
                                    <tr>
                                        <td><br> EMP-NO <br /><br /></td>
                                        <td><input type="text" name="Emp-no" value="<?php echo $emp_no; ?>" maxlength="" pattern="^[A-Za-z0-9]+$" readonly/>      
                                        </td>
                                    </tr>
                                   
                                         
                                    <tr>
                                        <td><br> MARRIAGE STATUS<br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="radio" name="Marriage" value="Single" <?php if($marriage =="Single"){echo "checked";}?>> Single
                                            <input type="radio" name="Marriage" value="Married" <?php if($marriage =="Married"){echo "checked";}?>> Married 
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> TEAM NAME <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="text" name="T-Name" value="<?php echo $t_name; ?>" maxlength="25" pattern="^[0-9a-zA-Z_\-\.]+$" required >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>TOTAL TEAM MEMBERS<br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                        <input type="number" name="T-Member" value="<?php echo $t_member; ?>" maxlength="2" size="2" pattern="[0-1]{1}[0-9]{1}" required >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>PROJECT NAME<br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="text" name="P-Name" value="<?php echo $p_name; ?>" maxlength="30" pattern="^[0-9a-zA-Z\s]+$" required  >
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> PROJECT DURATION <br /><br /></td>
                                        <td>
                                        <input type="text" name="P-Duration" value="<?php echo $p_duration; ?>" maxlength="12" size="12" pattern="^[0-9a-zA-Z\s]+$" required >
                                
                                        </td>
                                    </tr>
                                </table><br><br />
                                <input type="submit" value="Update" align="center" onclick="alert('Informations are updated!')" href="update-project.php">
                                <button onclick="show-workers.php" align="center">Save</button>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <footer>
            <p>Have a nice day</p>
        </footer>   
    </body>
</html>
