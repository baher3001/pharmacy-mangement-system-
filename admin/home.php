<?php 
    session_start();

if(isset($_SESSION['id'] ))
    {

     

    }else
    {
        header("location:login.php?eror=1");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <style>
        header
    {
    width: 100%;
    height: 100vh;
    background-color: #2980b9;
   
    }
    header .table 
    {
        color:white;
    }
    </style>
</head>
<body>
    
    <nav>
        <div class="container">
            <div class="nav-logo">
                <h3> <?php echo $_SESSION['name']; ?> </h3>
            </div>
            <div class="nav-content">
                <a href="logout.php" class="btn btn-danger" >  logout</a>

                <a href="http://localhost/php/pharmacy/admin/home.php" class="btn btn-primary"> users  </a>
                <a href="http://localhost/php/pharmacy/admin/requests.php" class="btn btn-success"> requests  </a>
            </div>
        </div>
    </nav>
    
    <header>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Name </th>
                <th scope="col">Email</th>
                <th scope="col"> phone </th>
                <th scope="col"> location  </th>
                </tr>
            </thead>
            <tbody>
            <?php 
                
                include('../include/conn.php');
                
                $sql = "SELECT name,mail,phone,location FROM users ORDER BY name ,mail,phone,location";

                $res = $conn->query($sql);

                $id = 0;

                while($rows =$res->fetch_assoc())
                {
                    $id++;
                





            ?>
                <tr>
                <th scope="row"> <?php echo $id ?> </th>
                <td> <?php echo $rows['name']; ?>   </td>
                <td> <?php echo $rows['mail']; ?></td>
                <td> <?php  echo $rows['phone'];?> </td>
                <td> <?php echo $rows['location']; ?></td>
                </tr>


                <?php 
                }
                ?>
            </tbody>
            </table>

        </div>
    </header>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

