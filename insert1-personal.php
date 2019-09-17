<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INSERT</title>
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
                width: 50%;
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

        </style>
    </head>

    <body>
        <header><h1>INSERT PRIMARY INFORMATION</h1></header>
        <section>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li><br>
                    <li><a href="insert1-personal.php">Insert Primary-Details</a></li><br>
                    <li><a href="insert1-workers.php">Insert Additional-Details</a></li><br>
                    <li><a href="insert1-project.php">Insert Project-Details</a></li><br>
                    <li><a href="system-allotment.php">Show Details</a></li><br>
                    <li><a href="admin.php">Admin</a></li><br>
                </ul>
            </nav>
            <article>
                <div class="container" >
                    <div class="jumbotron" align="center">
                        <div class="container" align="center">
                            <form method="post" action="insert1-workers.php" enctype="multipart/form-data" padding: 20px >
                                <table align="center" cellpadding="8">
                                    <tr>
                                        <td><br> EMP-NO <br /><br /></td>
                                        <td><select name="Level" id="level" >
                                                <option value="Emp">Emp</option>
                                                <option value="Led">Led</option>
                                                <option value="Man">Man</option>
                                            </select>
                                        <input type="number" name="Emp-no" value="" maxlength="4" id="emp_no" size="4" pattern="^[0-9]+$" required >
                                        (ex:'emp001') 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>NAME <br /><br /></td>
                                        <td><select name="Gender" id="level" >
                                                <option value="Mr">Mr</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        <input type="text" name="Name" value="" maxlength="25" id="ename" size="25" pattern="^[A-Za-z\s]+$" required >
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> AGE <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="number" name="Age" id="eage" value="" maxlength="3" pattern="^[0-9]+$" required>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> ADDRESS <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <textarea placeholder="Address" name="Address" id="eaddress" value="" row="4" cols="30" pattern="^[0-9a-zA-Z][^0-9a-zA-Z]+$" required></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> E-MAIL <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="email" name="email" id="email" value="" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br>PH-NUMBER <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input value="+91" maxlength="3" size="3" readonly><input type="tel" name="ph-number" pattern="[6-9]{1}[0-9]{9}" id="eph_no" value="" maxlength="10" size="15" required>
                                        </td>
                                    </tr>
                                </table><br><br />
                                <input type="submit" value="Submit" align="center" onclick="alert('Are you sure to insert this information?..')"href="insert1-workers.php">
                                <input type="Reset" value="Reset" align="center" href="insert1-personal.php" >
                            </form>
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