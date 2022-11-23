<?php
session_start();

$con=mysqli_connect('localhost', 'game', 'Ghnmklol1989', 'autism');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

					$username = $_SESSION["username"];
                    $sql=mysqli_query($con,"SELECT * FROM users where username='{$username}'");
                    $row  = mysqli_fetch_array($sql);
					$con->query("UPDATE users SET loggedin = 0 WHERE username = '{$username}'");
session_destroy();
header("Location: index.php"); 
?>