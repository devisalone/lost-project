
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

<form class="d-flex" role="search" action="search_box.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_box">
        <button class="btn btn-outline-success" type="submit" name="search_btn">Search</button>
      </form>

</body>
</html>

<?php

 
  if(!empty($_GET["search_box"])){
    $search = $_GET["search_box"];
    header("location: search.php?query={$search}");
  }
  else
  {
  //  header("location: search.php?query=1=1");

  }
?>