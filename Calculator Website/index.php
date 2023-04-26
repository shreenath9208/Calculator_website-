<?php
session_start();

if(isset($_SESSION['em'])){
    header("location:index2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="cal.css" />
    
  
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="calculator.jpg" alt="Icon" width="40" height="30">
            </a>
        </div>

        <button class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-danger  " data-bs-toggle="modal" data-bs-target="#SignUpModal">SignUp</button>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SignUpModal">
    SignUp
  </button> -->

        <!--   This is the login Modal -->
        <?php 
        include "include/login.php"
        ?>

 <!-- This is the actully the  code for the  -->
        <form action="signup.php" method="post">
            <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="SignUpModalLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="login.php" method="post">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                                </div>


                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleFormControlInput1">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="validation2()">submit</button></br><br>
                            <!-- <p> Alerady have an account <a href="include/login.php" target="_self">LOGIN</a> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </nav>


    <?php 
    include "include/main.html"
    ?>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="include/cal.js"></script>
</body>

</html>