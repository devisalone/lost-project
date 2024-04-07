<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            
            background-image: url('img/pattern-png-transparent-4.png');
             height: 100vh;

        }
        .login-box {
            max-width: 500px;
            margin: 180px auto;
            background-color: #fff; /* White Background */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
   
    </style>
</head>
<body>
    <div class="container bg-image ">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-box">
                    <h2 class="text-center fs-1 text-primary">Log in!</h2>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Email-ID</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                        </div>
                        <div class="text-center text-danger">
                        <?php

include('database.php');

    if(isset($_POST['login'])){
        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
        $pass = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);

        if(!empty($email) && !empty($pass)){
      
     
        $sql = "SELECT * FROM user_profile WHERE email = '$email' ";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_array($result);
        if ($row['email'] == $email && $row['password'] == $pass){
            header("Location: dashboard.php");
        }
        else{
            $wrong = "Enter Wrong Username or Password!!";
            echo $wrong;
        }

    
    }
   
        else{
            echo "Enter Valid Username or Passwrod!!";
        }
        

    }
?>
                
                      </div>
                      <div class="form-group text-center ">
                      Don't have an account? <a href="signup.php" class="text-primary">Sign up</a>
                          
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
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

