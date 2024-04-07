<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.bundle.js"></script>
    <style>
    .list{
        float: left;
       

    }
    .anchor{
      text-decoration:none;  
    
    }
    </style>
</head>
<body>
<?php
    include("header.php");
    include("search_box.php")
    ?>
    <div class="container-fluid ">
<div class="row ps-4 my-5">
<?php
    include("database.php");
    if(isset($_GET['query'])){
         $sea=   $_GET['query'];
       
   $sql = "SELECT * FROM  lost_item  WHERE Product_Name  like  '$sea%'";
   $res= mysqli_query($conn,$sql);
   if(mysqli_num_rows($res) > 0){
   while($row = mysqli_fetch_assoc($res)){
    ?>


   
      
<div class="card mb-5 me-5  list col-sm-3 col-md-6" style="width: 18rem;">
  


<img src="<?=$row['Product_img']?>" class="card-img-top" >
  <div class="card-body">
    <h3 class="card-text  text-center text-dark"><?=$row['Product_Name']?></h3>
    
    <p class="card-text  text-center text-dark"><?=$row['Product_Description']?></p>
    <p class="card-text  text-center text-dark">Founded By:<?=$row['Founded_BY']?></p>
   <p class="text-center"> Social Media:<a href="<?=$row['Social_Media']?>"><img src="img/link-solid.svg" alt="link" ></a></p>
  </div>

</div>

        
    
   <?php } }} 
    else{
    //  header("location: home.php");
    }
   ?>

   </div>
   </div>

</body>
</html>