<?php include 'database.php';
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">



<style>



form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 50px;
   width: 130px;
   margin: 35px 0;
   margin-left: 260px;
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);

 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}


     </style>





<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Clinkers - Industry, Factory and Engineering Template </title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="office-hour">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Monday - friday : 8:00 AM to 7:00 PM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="contact-info">
                                <ul>
                                    <li><i class="fa fa-phone"></i> +012 (3546) 547</li>
                                    <li><i class="fa fa-envelope"></i> info-desk@clinkers.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.php"><h3>E-Buspass</h3>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="index-2.php">Home</a>
                                <ul class="sub-menu">
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li class="menu-item-has-children">
                                 <a href="#">Registration</a>
                                <ul class="sub-menu">
                                    <li><a href="registration.php">New User -Register</a></li>
                                    <li><a href="login2.php">Exit User -Login</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                               
                            </li>
                            <li class="menu-item-has-children">
                               
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="request-quote">
                        <a href="#">Request Quote</a>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->   
        <section class="hero hero-slider-wrapper hero-style-1">
            <div class="hero-slider">
                <div class="slide">
                    <img src="bus1.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                               <!--  <h2><span>One Industry</span>All Solution</h2>
                                <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                                <div class="btns">
                                    <a href="#" class="theme-btn">Our Industries</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img src="bus1.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                               <!--  <h2><span>One Industry</span>All Solution</h2>
                                <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                                <div class="btns">
                                    <a href="#" class="theme-btn">Our Industries</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img src="bus1.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                               <!--  <h2><span>One Industry</span>All Solution</h2>
                                <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                                <div class="btns">
                                    <a href="#" class="theme-btn">Our Industries</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start cta-section -->
       
        <!-- end cta-section -->


        <!-- start services-section -->
       





<?php


if(isset($_POST['submit']))
{

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  $ins="  INSERT INTO registration(name,phone,email,password)VALUES('$name','$phone','$email','$password')";
  $res=mysqli_query($con,$ins);
  if($res)
  {
     echo "<script language='javascript'>alert('data inserted')
             window.location = 'login.php';
             </script>";
  }
  else
  {
     echo "<script language='javascript'>alert('data not inserted')</script>";
  }


 


}


?>






<div class="container">
    <div ><center>Registration</center></div><br><br><br>
    <div class="content" style="margin-left: 350px;">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">name</span>
            <input type="text" placeholder="Enter your name" name="name">
          </div>
           <div class="input-box">
            <span class="details">phone</span>
            <input type="text" placeholder="Enter your Phone" name="phone">
          </div>
        
          <div class="input-box">
            <span class="details">email</span>
            <input type="text" placeholder="Enter your email" name="email">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password">
          </div>
          
      
        <div class="button"> 
          <input type="submit" value="Register" name="submit" style="margin-left:-140px;">
        </div>
      </form>
    </div>
  </div>




        <!-- start contact-info-map-section -->
        <section class="contact-info-map-section">
            <div class="content">
                <div class="left-col">
                    <div class="location-map" id="map"></div>
                </div>
                <div class="right-col">
                    <div class="inner">
                        <div class="title-text">
                            <h3>Drop us a line</h3>
                            <p>For any kind of query, contact us with the details below.</p>
                        </div>
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-phone"></i> +123 (569) 254 78</li>
                                <li><i class="fa fa-envelope"></i> info-desk@clinkers.com</li>
                                <li><i class="fa fa-home"></i> #59, East Madison Ave, Melbourne, Australia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end content -->
        </section>
        <!-- end contact-info-map-section -->


        <!-- start news-letter-section -->
        

        <!-- start site-footer -->
       
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>
