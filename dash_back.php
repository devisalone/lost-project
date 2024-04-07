<?php

include("database.php");

            $Product_Name=  $_POST["Product_Name"];
            $Product_Description =$_POST["Product_Description"];
            $Founded_By = $_POST["Founded_BY"];
            $Social_Media = $_POST["Social_Media"];
            $Product_img = $_FILES["Product_img"];
           
    

if(isset($Product_Name) && isset($Product_Description) && isset($Founded_By)
            && isset($Social_Media) && isset($Product_img) ){
  
   

   
    
    $Product_img_name = $_FILES["Product_img"]["name"];
    $Product_img_tmp = $_FILES["Product_img"]["tmp_name"];
    $Product_img_error = $_FILES["Product_img"]["error"];
    if($Product_img_error == 0){

        
        
        
        $Product_img_ex = pathinfo($Product_img_name,PATHINFO_EXTENSION);
        $Product_img_ex_lc = strtolower($Product_img_ex);
        $allowed_exs_Product_img =  array("jpg","jpeg","png");
        
     
        if(in_array($Product_img_ex_lc,$allowed_exs_Product_img)){
                $new_Product_img_name = uniqid("thumbnail-",true). '.' .$Product_img_ex_lc;
                $Product_img_upload_path="uploads/".$new_Product_img_name;
                move_uploaded_file($Product_img_tmp,$Product_img_upload_path);
               
                $sql = "INSERT INTO lost_item (Product_Name,Product_Description,Product_img,Founded_BY,Social_Media) VALUES ('$Product_Name','$Product_Description','$Product_img_upload_path','$Founded_By','$Social_Media')";
                mysqli_query($conn,$sql);  
                
          $upload= "Item Uploaded Successfully!!";
        header("Location: dashboard.php?upload={$upload}");
            
        }
        else{

            $em_thumbnail  = "You can't upload thumbnail files of this type";
             header("Location: ../home.php?error={$em_thumbnail}");
        }
    }
    
        
    
        
    
}
else{
    header("Location: /../navigation.php");
    
}

mysqli_close($conn);


?> 