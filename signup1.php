
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <?php 

include('include/conn.php');

if(isset($_POST['sign']))
{
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    
    $secureCode = md5(date("h:i:s"));
   
    $active = 0;
    
    if(empty($name) && empty($mail) && empty($pass))
    {

              echo "<div class='alert alert-danger text-center'>  you have to fill form please    </div>";

    }else
    {
        $sql = "INSERT INTO users(name,mail,pass,phone,location,secureCode, active )
        VALUES('$name','$email','$pass','$phone','$location','$secureCode','$active')";

        $res =  $conn->query($sql);
        if($res)
        {
            echo "<div class='alert alert-success text-center'>   please check your Email inbox    </div>";

            require_once 'mail.php';

            $mail->addAddress($email);
            $mail->Subject = 'Seacurty code from website ';
            $mail->Body ='<h1>  thank you for registed here this website  </h1>'
            . "<div>  code secrity here ". "</div>" 

            ."<a href='http://localhost/php/pharmacy/active.php?code=".$secureCode."'> "
             . "active.php".
            
            "?code=".$secureCode. 
            "</a>" ;

          
            



            $mail->setFrom('baheratef20@gmail.com', 'pharmacy website ');

            $mail->send();




        } else
        {
            echo "<div class='alert alert-danger text-center'>  you have to fill form please    </div>";
            echo $conn->error;
        }

    }
    



}





?>