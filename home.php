<?php 

session_start();

if(isset($_SESSION['id']))
{
  
}else
{
    header('location:index.php?error=1');

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
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    
<nav>
    <div class="container">
        <div class="nav-logo">
            <h3>
                Pharmacy
            </h3>
        </div>
        <div class="nav-content">
            <ul>
                <li>
                    <a href="logout.php" class="btn btn-danger"> Log Out  </a>
                </li>
            </ul>
        </div>

        <!-- <div class="burger">
            <i class="fas fa-bars"></i>
            
       
        </div> -->
    </div>
</nav>


<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 content  text-center ">
                <h2>
                    The best medicine
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi non dignissimos provident cum ex a 
                </p>
                <a href="#" class="btn btn-primary"> 
                    View Pharmacy
                </a>
            </div>
        </div>
    </div>
</header>


<!-- medicine  section here -->
<section class="medicine">
    <h3>
        medicine 
    </h3>
    <div class="container">
        <div class="box   owl-carousel">
            <div class="card" id="1">
                <img src="https://images.pexels.com/photos/4270371/pexels-photo-4270371.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid">
                <p>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="card" id="2">
                <img src="https://images.pexels.com/photos/4270371/pexels-photo-4270371.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid">

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, quam.
            </div>
            <div class="card" id="3">
                <img src="https://images.pexels.com/photos/4270371/pexels-photo-4270371.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, corporis?
            </div>
        </div>
    </div>
</section>

<!-- <section class="btn-content">
    <div class="container">
        <div class="btns">
            <div class="btn">

            </div>

            <div class="btn">

            </div>

            <div class="btn">

            </div>
        </div>
    </div>
</section> -->





<!-- end medicine here  -->
<div class="btns  text-center mt-3">
    <button class="btn btn-primary" id="btn-sign"> 
            Take your medicine       
    </button>
</div>





    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto sint maiores neque earum autem qui adipisci ipsa perspiciatis corporis praesentium at eum, aliquid, amet cumque odio quae tempora explicabo provident.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 info-logo">
                    <img src="https://image.freepik.com/free-psd/medical-mock-up-with-capsules_23-2148478001.jpg" class="img-fluid"> 
                    <div class="icon" >
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>














     <footer>
      
            <h5>
                 this website,it made by <a href="#"> baher atef </a>
            </h5>
    
    </footer>



    <!-- popup  here -->
    <div class="popup-video">
        <div class="close">
            <i class="fas fa-times"></i>

        </div>
        <div class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UhWFn0OFjRk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <!-- popup here  -->







    <!-- popup here  -->
    <section class="sign-up">
        <div class="close" id="close">
            <i class="fas fa-times"></i>
        </div>
        <div class="container">
            <form action="send.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""> medicine image  </label>
                    <input type="file" name="img" class="form-control"  >
                    <small> Please Enter your image here  </small>
                </div>

                <div class="form-group">
                    <label for=""> Name of Medicine </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name here " required>
                    <small> Please Enter your Name  here  </small>

                </div>
        
                <div class="form-group">
                    <textarea name="message" class="form-control" cols="30" rows="10" >

                    </textarea>
                    <small> Please Enter your Message here  </small>
                </div>
            


                <div class="form-group">
                    <input type="submit"  name= "send"  value="send" class="btn btn-primary btn-block">
                </div>

                <!-- <div class="form-group  mt-3">
                   <button class="btn btn-danger btn-block" id="login">  
                        Login                            
                    </button>
                </div> -->

            </form>
        </div>
    </section>
    <!-- popup here  -->


    
    <!-- popup here  -->
    <!-- <section class="log">
        <div class="close" id="close">
            <i class="fas fa-times"></i>
        </div>
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Email </label>
                    <input type="email" name="" class="form-control" placeholder="Enter your Email here " required>
                    <small> Please Enter your Email  here  </small>

                </div>
                <div class="form-group">
                    <label for="">Password </label>
                    <input type="password" name="" class="form-control" placeholder="Enter your password here " required>
                    <small> Please Enter your Password  here  </small>

                </div>



                <div class="form-group">
                    <input type="submit" value="login" class="btn btn-danger btn-block">
                </div>

          

            </form>
        </div>
    </section> -->
    <!-- popup here  -->







   
























    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/index1.js"></script>
</body>
</html>