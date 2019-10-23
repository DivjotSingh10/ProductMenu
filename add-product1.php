<?php
ob_start();     

// connect with database
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

// read the values from the text fields
$productName = $_REQUEST['productName'];
$productPrice = $_REQUEST['productPrice'];

// query to insert into table tbl_products
$query = "insert into tblProducts (productName, productPrice) values ('$productName', $productPrice)";

// execute the query
$result = mysqli_query($conn, $query);

// check if 1 record was added
if ($result == 1)
{
    
    header("location:add-product.php?result=success");
}
else
{
    
    header("location:add-product.php?result=fail");
}
?>
