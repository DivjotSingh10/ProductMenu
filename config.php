  <?php
    
 $host='localhost';                           // hostname 
    $user='chawladi_admin';                   //username
    $pswd='Q}ZkUHcXO([R';                     //password 
    $dbName='chawladi_mydb';                  //database name

$conn =mysqli_connect($host,$user,$pswd,$dbName);

// if connection is not estabhlished.
if (empty($conn))
{
    die("Connection failed: <br>" . mysqli_connect_error());
}
