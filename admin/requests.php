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
                <a href="#" class="btn btn-success"> requests  </a>
            </div>
        </div>
    </nav>
    
    <header>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col"> img </th>
                <th scope="col"> Name oF Medicine  </th>
                <th scope="col"> Message  </th>
                <th scope="col"> Delete  </th>
                <th scope="col"> Done  </th>


                </tr>
            </thead>
            <tbody>
            <?php 
                
                include('../include/conn.php');
                
                $sql = "SELECT * FROM medicine";

                $res = $conn->query($sql);

                $id = 0;

                while($rows =$res->fetch_assoc())
                {
                    $id++;
                





            ?>
                <tr>
                <th scope="row"> <?php echo $id ?> </th>
                <td> <img src="../<?php echo $rows['img']; ?>" style="width:100px;">   </td>
                <td> <?php echo $rows['name']; ?></td>
                <td> <?php  echo $rows['message'];?> </td>
                <td> <a href="delete.php?id=<?php echo $rows['id'];?>" class="btn btn-danger"> Delete </a></td>
                <td>  <button class="btn btn-primary  done"> Done  </button> </td>
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

    <script>
        let done = document.querySelector(".done");

done.addEventListener("click",()=>{


    document.querySelector("tbody").style.backgroundColor = "red";


})
    
    
    </script>


</body>
</html>

