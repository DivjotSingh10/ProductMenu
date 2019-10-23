<?php
    require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADD PRODUCT PAGE </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
        <style>
            body{
                
                background: url("home.jpg") no-repeat fixed center; 
                background-size :cover;
            }
            #wrapper
            {
                margin: 0 auto;
                width:70%;
            }
			
			table, td, th
			{    
				border: 1px solid #ddd;
				text-align: left;
			}

			table
			{
				border-collapse: collapse;
				width: 40%;
				margin: auto;
			}

			th, td
			{
				padding: 15px;
			}
			
			h2
			{
				text-align: center;
			}
			
			#msg
			{
				width:40%;
				margin:auto;
			}
        </style>

    </head>
    <body>
        <div id="wrapper">

           <h1>Student Management System </h1>
            
        <a href="index.php">Home</a> |  
        <a href='logout.php'>Logout</a> | 
        <a href="add-product.php">Add Product</a> | 
        <a href="member.php">View Products</a>
        
        <hr>
            <h2>Add Product</h2>

            <form action="add-product1.php" method="post">
                <table border="1">
                    <tr>
                        <td>Product Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                        <td>Product Price:</td>
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
           
            if (isset($_REQUEST['result']))
            {
                // check its value
                if ($_REQUEST['result'] == "success")
                {
                    echo "<p>Success! New product was added.</p>";
                }
                else if ($_REQUEST['result'] == "fail")
                {
                    echo "<p>Fail! New product was not added.</p>";
                }
            }
            ?>

        </div>
    </body>
</html>
