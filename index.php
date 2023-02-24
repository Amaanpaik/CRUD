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

    <nav class= "navbar justify-content-center fs-3 mb-5 " style="color:#FFFFFF; background-color:#000000"; >PHP CRUD WEBSITE</nav>
<div class="container">
  <?php
  if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    '.$msg.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>

    <a href="add_new.php" class= "btn btn-dark mb-3" >Add New</a>
     
    <table class="table table-hover table-striped text-center">
      <thead class= table-dark>
        <tr>
          <td scope="col">ID</th>
          <td scope="col">First Name</td>
          <td scope="col">Last Name</td>
          <td scope="col">Email</td>
          <td scope="col">Gender</td>
          <td scope="col">Action</td>
        </tr>
     </thead> 
     <tbody> 
       <?php  
       include "db_conn.php";

       $sql ="SELECT * FROM `crud`";
       $result = mysqli_query($conn,$sql);  
       while ($row = mysqli_fetch_assoc($result)){
         ?>
         <tr>
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['first_name']?></td>
           <td><?php echo $row['last_name']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['Gender']?></td>
           <td>
               <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
               <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
           </td>
          </tr>
          <?php
       }
       ?>  

       </tbody>  
    </table>
</div>
</body>
</html>