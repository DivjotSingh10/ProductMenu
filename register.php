<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>REGISTER Student Management System</title>
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
        <?php
            require_once 'header.php';
        ?>
        
        <h2>Register</h2>
        
        <form action="register1.php" method="post">
            <table style="margin:0 auto; width:30%;">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Register"></td>
                </tr>
            </table>
        </form>
        
        <?php
            if (isset($_REQUEST['result']))
            {
                if ($_REQUEST['result'] == "success")
                {
                    echo "<p>New user was registered</p>";
                }
                else if ($_REQUEST['result'] == "fail")
                {
                    echo "<p>New user was not registered</p>";
                }
                else if ($_REQUEST['result'] == "userexists")
                {
                    echo "<p>This username is already taken up. Please try again.</p>";
                }
            }
        ?>
        </div>
    </body>
</html>
