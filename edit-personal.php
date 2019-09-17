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
}

$sql = "SELECT * FROM std_table where id=$id"; 
$result = mysqli_query($conn,$sql);
//print_r($result);
//exit;

if (count($result) == 1){
    $row=mysqli_fetch_array($result);
    $emp_no=$row['EMP_NO'];
    $name=$row['NAME'];
    $age=$row['AGE'];
    $address=$row['ADDRESS'];
    $email=$row['EMAIL'];
    $ph_no=$row['PH_NUMBER'];
    //print_r($row);
    //exit;
}
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
        <header><h1>UPDATE PRIMARY INFORMATION</h1></header>
        <section>
            <nav>
                <ul>
                    <li><a href="edit-personal.php">Update Primary-Details</a></li><br>
                    <li><a href="show-personal.php">Show Details</a></li><br>
                    <a type='button' class='button' href='admin.php' >
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </ul>
            </nav>
            <article>
                <div class="container" >
                    <div class="jumbotron" align="center">
                        <div class="container" align="center">
                            <form method="post" action="update-personal.php" enctype="multipart/form-data" padding: 20px>
                                <table align="center" cellpadding="8">
                                    <input type="hidden" name="id"  value="<?php echo $id; ?>" />       
                                    <tr>
                                        <td><br> EMP-NO <br /><br /></td>
                                        <td><input type="text" name="Emp-no" value="<?php echo $emp_no; ?>" pattern="^[A-Za-z0-9]+$" required readonly/>      
                                        </td>
                                    </tr>
                                   
                                         
                                    <tr>
                                        <td><br><br>NAME <br /><br /></td>
                                        <td><input type="text" name="Name" value="<?php echo $name; ?>" maxlength="25" pattern="^[A-Za-z\s]+$" required />
                 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> AGE <br /><br /></td>
                                        <td><input type="number" name="Age" value="<?php echo $age; ?>" maxlength="3" pattern="^[0-9]+$" required />
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> ADDRESS <br /><br /></td>
                                        <td><input type ="text" name="Address" value="<?php echo $address; ?>" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> E-MAIL <br /><br /></td>
                                        <td><input type="email" name="mail" value="<?php echo $email; ?>" required />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> PH-NUMBER <br /><br /></td>
                                        <td><input value="+91" maxlength="3" size="3" readonly><input type="tel" name="ph-number" value="<?php echo $ph_no; ?>" maxlength="10" pattern="[6-9]{1}[0-9]{9}" size="15" required />
                                        </td>
                                    </tr>
                                </table><br><br />
                                <input type="submit" value="Update" align="center" onclick="alert('Informations are updated!')" href="update-personal.php">
                                <button onclick="show.php" align="center">Save</button>
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
