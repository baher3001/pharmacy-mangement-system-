
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<?php 

    include('include/conn.php');

    if(isset($_POST['send']))
    {
        $name = $_POST['name'];
        $message = $_POST['message'];
        
        $location = "uploads/";
        
        $file_location = $location.$_FILES['img']['name'];



        move_uploaded_file($_FILES['img']['tmp_name'],$file_location);


        if(!empty($name))
        {   
            $sql = "INSERT INTO medicine(img,name,message)VALUES('$file_location','$name','$message')";

            $res =$conn->query($sql);


            if($res)
            {
                echo "<div class='alert alert-success text-center'>   your requested was submitted   </div>";

            }else
            {
                echo "<div class='alert alert-danger text-center'>  Somthing wrong here    </div>";
                echo $conn->error;
            }



        }else
        {
            echo "<div class='alert alert-danger text-center'>  Somthing wrong here    </div>";

        }




    }





?>
