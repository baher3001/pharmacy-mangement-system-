<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<?php 

    include("include/conn.php");
    if(isset($_GET['code']))
    {
        $code = $_GET['code'];

        $sql = "SELECT secureCode FROM users WHERE secureCode = '$code'";

        $CheckEmail=$conn->query($sql);
        $newSecureCode = md5(date("h:i:s"));


        //  $active = 1;
        if($CheckEmail->num_rows>0)
        {
            $sql = "UPDATE users SET   secureCode ='$newSecureCode' , active = true  WHERE secureCode='$code'";

            $update = $conn->query($sql);

            if($update)
            {
                echo "<div class='alert alert-success text-center'>   now you can log now     </div>";
                echo "<a href='http://localhost/php/pharmacy/index.php' class='btn btn-success'> Log in </a>";

              
            }else
            {
                echo "<div class='alert alert-danger text-center'>  this code is not available now   </div>";


            }

        }



    }else
    {
        echo "<div class='alert alert-danger text-center'>  this code is not available now   </div>";

    }




?>


<!---->