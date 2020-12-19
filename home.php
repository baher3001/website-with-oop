<?php

    session_start();
    if(isset($_SESSION['id']))
    {   
        

    }else
    {
        header('location:index1.php?error=1');
    }
    



?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="logo.jpg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
        <!--start  nav -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">signup</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link " href="logout.php" tabindex="-1" aria-disabled="true"> logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


        <!--end nav-->
        <!--start header-->  
        <header>
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row">
                <div class="col ">

                    <h1 data-aos="fade-down" data-aos-duration="1600"> START YOUR DAY NOW </h1>

                </div>
                </div>
            </div>
        </header>
        <!--end hedaer-->
        <!--mate-->
        <section class="mate">
            <div class="conatiner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12   ww  "   data-aos="flip-down" data-aos-duration="1200">
                                                    <div class="card" >
                                <img src="w4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                </div>
                        
                    
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 ww "  data-aos="flip-down" data-aos-duration="1200">
                                <div class="card" >
                                            <img src="w4.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                            </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12  ww"  data-aos="flip-down" data-aos-duration="1200" >
                            <div class="card" >
                                        <img src="w4.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                        </div>

                    
                    </div>
                         
            </div>
        </section>


        <!--end mate-->
        <!--start section-->

        <section class="slide">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="ll.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="ll1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="ll2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>


        </section>





        <!--end section-->
        <!--footer-->
        <footer>
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col" >
                    
                        <h5 > &copy; all rights reservsed to Baher &reg; teams </h5>
                    
                    </div>
                </div>
            </div>
        </footer>



        <!--end footer-->

    




  <script src="jquery-3.5.1.js "></script>
  <script src="bootstrap.js"></script>
  <script src="index.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
</body>
</html>