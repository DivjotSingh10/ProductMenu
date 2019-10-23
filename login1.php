<?php
    // to avoid warning of headers already send
    ob_start();

    // start the session
    session_start();
    require_once 'config.php';

    // read the values
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    // SQL query to select a row based on username
    $query = "Select * from tblUsers where username = '$username';";

    // execute the query
    $result = mysqli_query($conn, $query);

    // check if a row was fetched
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);     
        $hashed_password = $row['password'];    

        if (password_verify($password, $hashed_password))
        {
            
            $_SESSION['username'] = $username;

           
            header('location:member.php');
            header('location:add-product.php');
            ob_end_flush();
            die();
        }
    }
    

    //login redirected
    header('location:login.php?result=fail');
?>
