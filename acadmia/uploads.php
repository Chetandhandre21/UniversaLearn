<?php
include 'connection.php';
error_reporting(0);
if(isset($_POST["submit"])){

    $Subject=$_POST['Subject'];
    $Board=$_POST['Board'];
    $Class=$_POST['Class'];
    $Link=$_POST['Link'];
    $Content_type=$_POST['Content_type'];
   
  
  
    
    $sql= "INSERT INTO`universalearn`.`uploads` ( `Subject`, `Board`, `Class`,`Link`, `Content_type`)
    VALUES ('$Subject', '$Board', '$Class','$Link','$Content_type');";
  
  
  if($conn->query($sql)==true){
    echo "<script>alert('Your inquiry is consider and further  Details send on Email or Contact ');</script>";
  
  
  }
  else{
     echo "ERROR: $sql <br> $conn->error";
  }
      
     
    }

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UniversaLearn</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
     <link href="acadmia/css/styleup.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/styleup.css">
    <!-- style CSS -->
   
</head>

<body>
    <?php
    include 'Adnav.php';
    ?>
   

    
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Upload E-Content</h2>
                            <p>Home<span>/</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">UniversaLearn</a></h1>
        </div>

    <div class="formbg-outer">
          <div class="formbg">
    <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Uploads Academic Content</span>
             
 
    <form id="stripe-login"action="uploads.php" method="POST">
                <div class="field padding-bottom--24">
                  <label for="">Subject</label>
                  <select class="" id="name" name="Subject">
                    <option>Subject</option>
                    <option>Mathematics</option>
                    <option>Physics</option>
                    <option>Chemistry</option>
                    <option>Biology</option>
                    <option>English</option>
                    <option>Other</option>
                  </select>
                 
                </div>
                <div class="field padding-bottom--24">
                    <label for="">Board</label>
                    <select class="" id="name"name="Board">
                        <option>Board</option>
                      <option>Maharashtra</option>
                      <option>CBSE</option>
                      <option>ICSE</option>
                      <option>NCERT</option>
                      <option>IB</option>
                      <option>Other</option>
                    </select>
                   
                  </div>
                  <div class="field padding-bottom--24">
                    <label for="">Standard</label>
                    <select class="" id="name"name="Class">
                        <option>Choose Class</option>
                      <option>class_1st</option>
                      <option>class_2nd</option>
                      <option>class_3rd</option>
                      <option>class_4th</option>
                      <option>class_5th</option>
                      <option>class_6th</option>
                      <option>class_7th</option>
                      <option>class_8th</option>
                      <option>class_9th</option>
                      <option>class_10th</option>
                      <option>Other</option>
                    </select>
                   
                  </div>
                  <div  class="field padding-bottom--24">
                    <label for="">Link of content</label>
                    <input type="text"id="name" name="Link"> 
                  </div>
            
                <div  class="field padding-bottom--24">
                  <label for="">Type Of Content</label>
                  <input type="text" id="name"name="Content_type"> 
                </div>
                  
                  
                
               
                 
        
            
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Upload">
                </div>
                
              </form>
              </div>
          </div>
          <div class="footer-link padding-top--24">
            <span> <a href=""></a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#"></a></span>
              <span><a href="#"></a></span>
              <span><a href="#"></a></span>
            </div>



</body>
</html>