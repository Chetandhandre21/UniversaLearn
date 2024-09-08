<!DOCTYPE html>
<html lang="en">
<main id="main">
<head>
      <link rel="stylesheet" href="css/styleup.css">
     <!-- <link rel="stylesheet" href="table.css">-->

     </head>
<body>
</form>
</main>
</div>
</body>
<body>
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">UniversaLearn</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">View Your Contents</span>
              
  <div class="main">
<p class="sign" align="center"> </p>
  <form class="form1"action="" method="post">
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
                  <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Upload">
                </div>
    </div>
</form>
</div>
    </div>
</div>
</body>
<body>
<h2>E-Content</h2>
<div class="table-wrapper">
    <table class="fl-table">
      <head>
      <link rel="stylesheet" href="css/table.css">
</head>
        <thead>
        
        <tr>
            <th>Subject</th>
            <th>Board</th>
            <th>Class</th>
            <th>Link</th>
            <th>Content_Type</th>
           

          </tr>
        </thead>
       
        <tbody>
</body>
   </html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
$Class=$_POST['Class'];
$query="SELECT * FROM `uploads` where Class='$Class'";
$query_run= mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_run))
{
  ?>
  <tr>
  <td><?php echo $row['Subject'] ?></td>
  <td><?php echo $row['Board'] ?></td>
   <td><?php echo $row['Class'] ?></td>
   <td><?php echo $row['Content_type'] ?></td>
   <?php 
    $url=$row ['Link'];
   $urls=str_replace("localhost/UniversaLearn/acadmia/","",$url);
   
 ?>
 <td><a href="<?php echo $urls ; ?>"><?php echo $urls ; ?></a></td>
   
</tr>
<?php
}

}
?>
 </table>
 </div>
 </main>
</body>
</html>
