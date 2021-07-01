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
        if(isset($_GET['eror']))
        {
            echo "<div class='alert alert-danger '>  email or password Incorrect here  </div>";

        }




        include("../include/conn.php");
        if(isset($_POST['log']))
        {
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $sql = "SELECT * FROM admin WHERE mail='$mail' AND pass = '$pass'";
            $res = $conn->query($sql);
            if($res->num_rows>0)
            {
                session_start();
                while($rows = $res->fetch_assoc())
                {
                    $_SESSION['id'] = $rows['id'];
                    $_SESSION['name'] = $rows['name'];
                
                
                }

                header("location:home.php");

            }else
            {
            echo "<div class='alert alert-danger '>  email or password Incorrect here  </div>";

            }
            // else
            // {
            //     echo "<div class='alert alert-danger '>  email or password Incorrect here  </div>";
            // }

            
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
                <label for="">password</label>
                <input type="text" name="pass" class="form-control" placeholder="Enter your password here " required>
                <small style="color:red;" class="text-center">  password here please  </small>
            </div>
            <div class="form-group">
                <input type="submit" value="log" class="btn btn-primary btn-block" name="log"> 
            </div>

        </form>


        <a href="forget.php" class="btn btn-success"> forget your password  </a>

    </div>
  

</section>

 
    









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>  
</body>
</html>