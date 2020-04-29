<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/images/mie logo.png" type="image/x-icon">
</head>
<style>
    body {
        background-image: url("/images/contact.jpg");
        background-size: cover;
    }
    .dropdown
   {
       margin-left: 0px;
   }
   .col-centered{
    float: none;
    margin: 0 auto;
}
  #inp
  {
      margin-top: 10px;
  }
  #inpl
  {
      margin-top: 10px;
      margin-bottom: 50px;
  }
</style>

<body>
  <!--top menu bar-->
  <nav class="navbar navbar-expand-md  navbar-light sticky-top navbar-style">
    <div class="container-fluid">
        <!--logo-->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                <span class="icon-bar "></span>
                <span class="icon-bar "></span>
                <span class="icon-bar "></span>
            </button>
            <a href="/index.html"> <img class="logo" src="/images/mie logo.png" alt="logo"></a>
        </div>
        <!-- menu items-->
        <div class="collapse navbar-collapse" id="micon">
            <ul class="nav navbar-nav ml-auto navbar-right">
                <li class="nav-item active"><a class="nav-link" href="/index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/contact.html">Contact</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Subjects
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/pages/de.html">DE</a></li>
                        <li><a href="/pages/ds.html">DS</a></li>
                        <li><a href="/pages/pom.html">POM</a></li>
                        <li><a href="/pages/Dbms.html">DBMS</a></li>
                        <li><a href="/pages/math.html">MATHS</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto col-centered">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us </h2>
                        <hr>
                        <?php
                        $Msg = "";
                        if(isset($_GET['error']))
                        {
                            $Msg = " Please Fill in the Blanks ";
                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                        }

                        if(isset($_GET['success']))
                        {
                            $Msg = " Your Message Has Been Sent ";
                            echo  '<div class="alert alert-success">'.$Msg.'</div>';
                        }
                        ?>

                    </div>
                    <div class="card-body">
                        <form action="./process.php" method="post">
                        <input type="text" id="inp" name="name" placeholder="Name" class="form-control mb-2">
                        <input type="email" id="inp" name="Email" placeholder="Email" class="form-control mb-2">
                        <input type="text" id="inp" name="Subject" placeholder="Subject" class="form-control mb-2">
                        <textarea name="msg" id="inp" placeholder="Message" class="form-control mb-2"></textarea>
                        <button type="submit" id="inpl" class="btn btn-success" name="submit">Submit</button>
                        </form>    
                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer class="page-footer">

        <div style="text-align: center;" class="container-fluid">
            <a href="/index.html" class="footer_link">Home</a>
        
            <a href="#" class="footer_link">  About</a>
            <a href="#" class="footer_link">  Privacy Policy</a>
            <a href="/contact.php" class="footer_link">  Contact Us</a>
        </div>
    <div class="footer-copyright text-center ">© 2020 Copyright:
      <a href="/index.html"> MakeItEazy</a>
    </div>
  
     </footer>
</body>

</html>