<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php 
        include("../include/conn.php");

        if(isset($_POST['forget']))
        {
            $mail = $_POST['mail'];
            $sql = "SELECT * FROM admin WHERE mail = '$mail'";
            $res = $conn->query($sql);           
            if($res->num_rows>0)
            {   
                $sql1 = "SELECT pass FROM admin WHERE mail = '$mail' ";
                $result = $conn->query($sql1);
                if($result)
                {
                    while( $rows =$result->fetch_assoc())
                    {
                        echo "<div class='alert alert-danger '>".  $rows['pass']  ."</div>";
 
                    }

                } else
                {
                    echo "<div class='alert alert-danger '>  email  Incorrect here  </div>";

                }
            }else
            {   
                echo "<div class='alert alert-danger '>  email  Incorrect here  </div>";

            }

        }


    ?>

    <section class="sign-up">

    
    <div class="container">
        <form action="" method="POST">
    
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="mail" class="form-control" placeholder="Enter your email here " required>
                <small style="color:red;" class="text-center">  email here please  </small>

            </div>
            <div class="form-group">
                <input type="submit" value="send " class="btn btn-primary btn-block" name="forget"> 
            </div>

        </form>


        <a href="login.php" class="btn btn-success"> login.php  </a>

    </div>
  

</section>

 
    









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>  
</body>
</html>