<?php

$conn=mysqli_connect("localhost", "root", "", "mydatabase");

if(!$conn)
{
    die("Connection Failed." . mysqli_connect_error());
}

?>