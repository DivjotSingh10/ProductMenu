<?php
    // check if the session exists, otherwise redirect back to login page
    require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - Database Connectivity Example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            
            body{
                
                background: url("home.jpg") no-repeat fixed center; 
                background-size :cover;
            }
            #wrapper
            {
                width:50%;
                margin:auto;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th
            {
                background-color: #4CAF50;
                color: white;
            }

            h2, h3
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Database Connection  Example</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="logout.php">Logout</a>

            <hr>

            <h2>View Products</h2>
            
           
            
           
            <table id="search">
     <tr>
         <td>
             <form action="searchbar.php" method="POST"> 
                 <div class="input-group">
                    <input type="text" class="form-control" name="txtsearch" placeholder="Search" value=""> 
                     <div class="input-group-btn">
                         <button class="btn btn-deafault" type="submit" name="btnSearch" value="Search"><i class="glyphicon glyphicon-search"></i></button>
                     </div>
                 </div>
                 
             </form>
         </td>
     </tr>
     <tr><td></tr>
 </table>

            

                <?php
 $host='localhost';
    $user='chawladi_admin';
    $pswd='Q}ZkUHcXO([R';
    $dbName='chawladi_mydb';

$conn =mysqli_connect($host,$user,$pswd,$dbName);

                // if connection wasn't established
                if (empty($conn))
                {
                    die("Connection failed: <br>" . mysqli_connect_error());
                }


               // query to select data from table
                $query = "select * from tblProducts";

                // execute the query
                $result = mysqli_query($conn, $query);

                // check if some rows were fetched
                if (mysqli_num_rows($result) > 0) 
                {    
                    // print table and header row
                    echo "<table id='products'>";
                    echo "<tr><th>Row #</th>";
                    echo "<th>Product Name</th>"; 
                    echo "<th>Product Price</th>";
                    
                    
                    
                    $i = 1;     // to print the # of each row
                    
                    // loop through all the rows of the fetched data
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$i</td>";
                        echo "<td>" . $row['productName'] . "</td>";
                        echo "<td>" . $row['productPrice'] . "</td>";
                        
                        
                        $i++;
                    }
                    
                    echo "</table>";
                }
                else
                {
                    echo "<h3>The table is empty.</h3>";
                }
                ?>
        </div>
    </body>
</html>
