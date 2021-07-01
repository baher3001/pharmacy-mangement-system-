<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<?php


include("include/conn.php");

if(isset($_POST['log']))
{
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];


    $sql = "SELECT * FROM users WHERE mail = '$mail' AND pass = '$pass'";

    $res = $conn->query($sql);


    if($res->num_rows>0)
    {
        session_start();

        while($rows = $res->fetch_assoc())
        {
            $_SESSION['id'] = $rows['id']; 
        }


        header('location:home.php');


    }else
    {
        echo "<div class='alert alert-danger text-center'>  Email or password is incorrect here    </div>";

    }



}





?>