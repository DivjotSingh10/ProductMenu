<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Searching Student's Products</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>  body{
                
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
         <h1>Database Connection Example.</h1>

            <a href="index.php">Home</a> | 
            <a href="logout.php">Logout</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="member.php">View Products</a>

            <hr>

            <h2>Viewing the Products</h2>
            
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
        ?>
            
            <?php
                if(isset($_REQUEST['btnSearch']))
                {
                  $txtsearch = mysqli_real_escape_string($conn, $_REQUEST['txtsearch']);
                  $sql = "SELECT * FROM tblProducts WHERE (`productName` LIKE '%".$txtsearch."%')";
                  $result = mysqli_query($conn, $sql);
                  $queryResult = mysqli_num_rows($result);
                 
                  if ($queryResult > 0)
                  
                {
                     
                    echo "<table id='products'>";
                    echo "<tr><th>Row #</th>";
                    echo "<th>Product Name</th>"; 
                    echo "<th>Product Price</th>";
                    
                    
                    
                    $i = 1;    
                    
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
                    echo "<h3>Nothing was found, enter a valid item name.</h3>";
                }
                }
            ?>
           
            </div>
    </body>
</html>
