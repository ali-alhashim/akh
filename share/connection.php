<?php
// connect to database
require("share/key.php");
try
{
$mysqlConnection = new PDO("mysql:host=$serverAddress;dbname=$database","$username","$password");


}
catch(SQLException e)
{
    echo("<script> alert($e) </script>");
}
?>