<?php

include "db_conn.php";

if(isset($_POST['submit'])){
    $first_name  = $_POST['first_name'];
    $last_name   = $_POST['last_name'];
    $email       = $_POST['email'];
    $gender      = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";
    
    $result =mysqli_query($conn,$sql);

    if($result){
        header("Location: index.php?msg=New record created successfully ");
    }
    else{
        echo "Failed:". mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>PHP CRUD </title>
</head>
<body>
     <!-- bootstrap -->
    <script src= https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <nav class= "navbar navbar-light justify-content-center fs-3 mb-5 " style="color:#FFFFFF; background-color:#000000";>PHP CRUD WEBSITE</nav>

    <div class="container ">

    <div class="text-center mb-4 " style="color:#FFFFFF; background-color:#000000">
        <h3>Add New User</h3>
         <p class="text-mutated">Complete the form below to add a new user</p>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
         
        <div class="row mb-3 ">
            <div class="col">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="Albert">
            </div>
            <div class="col">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="Einstein">
            </div>
        </div>

        <div class="mb-3" >
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">   
        </div>

        <div class="form-group mb-3">
            <label>Gender:</label> &nbsp;
            <input type="radio" class="form-check-input" name="gender" id="male" value="Male">
           <label for="Male" class="form-input-label">Male</label> 
           &nbsp; 
           <input type="radio" class="form-check-input" name="gender" id="female" value="female">
           <label for="Female" class="form-input-label">Female</label>  
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            &nbsp; 
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div> 

    </form>
    </div>
    </div>
</body>
</html>