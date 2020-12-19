





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
</head>
<body>
        <!--start  nav -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">signup <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index1.php">login</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


        <!--end nav-->  
        <!--form-->
        <section>
            <div class="container h-100 d-flex align-items-center justify-content-center">
             <form action=""  method="POST"  class="w-100">
                <div class="form-group">
                
                    <label for=""> Enter your name  </label> 
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>             
                </div>
                <div class="form-group">
                    <label for="">  Enter your Email </label>
                    <input type="email" name="mail" class="form-control" placeholder="Enter your Email" required>
                </div>
                <div class="form-group">
                <label for="">  Enter your password </label>
                    <input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="signup" name="signup" class="btn btn-danger btn-block">
                </div>

             </form>
            </div>
        </section>



        <!--end form-->
        <!--footer-->
        <footer>
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col">
                    
                        <h5> &copy; all rights reservsed to Baher &reg; teams </h5>
                    
                    </div>
                </div>
            </div>
        </footer>



        <!--end footer-->

        <?php
        
            include('dd.php');

            if(isset($_POST['signup']))
            {
               
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $pass = $_POST['pass'];

                $sql = "INSERT INTO test50(name,mail,pass)VALUES('$name','$mail','$pass')";

                if($connection->query($sql))
                {
                    header('location:index1.php');
                }else
                {
                    echo"error".$connection->error;
                }
                
           
            }
        
        
        
        
        
        
        
        
        ?>
  




  <script src="jquery-3.5.1.js "></script>
  <script src="bootstrap.js"></script>
  <script src="index.js"></script>
</body>
</html>