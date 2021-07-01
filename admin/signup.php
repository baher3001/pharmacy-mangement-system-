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
        if(isset($_POST['sign']))
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            // $pass1 =  password_hash($pass, PASSWORD_DEFAULT); 
            $app = "sadsadasd";  
            $token = md5($app);
            if(!empty($name) && !empty($mail) && !empty($pass))
            {
                
                $sql = "INSERT INTO admin(name,mail,pass,token)VALUES('$name','$mail','$pass','$token')";

                $res = $conn->query($sql);
                if($res)
                {
                    echo "<div class='alert alert-success text-center'>  you can login now   </div>";
                }
                else
                {
                    echo "<div class='alert alert-danger text-center'>  you can...t login now   </div>";
                }


            }

        }

    ?>

    <section class="sign-up">

    
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name here " required>
                <small style="color:red;" class="text-center">  name here please  </small>
            </div>
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
                <input type="submit" value="sign" class="btn btn-primary btn-block" name="sign"> 
            </div>

        </form>


    </div>
  

</section>

 
    









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>  
</body>
</html>