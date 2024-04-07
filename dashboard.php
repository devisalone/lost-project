<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
       
    body {
            
            background-image: url('img/pattern-png-transparent-4.png');
             height: 100vh;

        }

        .profile_box{
            max-width: 500px;
            margin: 100px auto;
            background-color: #fff; /* White Background */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col md-8">
                    <div class="profile_box">
                    <img src="img/logo.jpg" alt="logo" width="100px">
                    <form action="dash_back.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" class="form-control"  name="Product_Name">
                        </div>
                        <div class="form-group">
                            <label >Item Description</label>
                           <input type="text" name="Product_Description"  class="form-control"  cols="30" rows="10">
                        </div>
                        <div class="form-group">
                            <label >Item Image</label><br>
                            <input type="file" class="form-control"  name="Product_img">
                        </div>
                        <div class="form-group">
                            <label>Founded By</label>
                            <input type="text" class="form-control"  name="Founded_BY">
                        </div>
                        <div class="form-group">
                            <label>Social Media Link</label>
                            <input type="text" class="form-control"  name="Social_Media">
                        </div>
                        <div class="form-group">
                              
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="Add_blog">Add</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

