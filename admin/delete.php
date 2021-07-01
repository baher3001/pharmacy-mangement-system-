<?php 

include("../include/conn.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM medicine WHERE id ='$id'";

    $conn->query($sql);

    header('location:requests.php');    

    


}





?>