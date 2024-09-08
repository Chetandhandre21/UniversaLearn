
<?php

include('connection.php');
error_reporting(0);

  $sql = "SELECT * FROM cources";
  $all_product = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mincource.css">
    <link rel="stylesheet" href="stylecource.css">
    <title>UniversaLearn</title>
</head>
<body>
    <?php
      include_once '';

   ?>

   <main>
       <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["imag"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <p class="cname"><?php echo $row["cname"];  ?></p>
               <p class="descr"><b><?php echo $row["descr"]; ?></b></p>
               <p class="core"><b><?php echo $row["core"]; ?></b></p>
             
           </div>
           <a href="https://<?php echo $row["vlink"] ; ?>">
           <button class="add" data-id="">Get Course</button>
          </a>
       </div>
       <?php

          }
     ?>
   </main>
   
</body>
</html>