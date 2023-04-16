
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-StepFrom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="login d-flex justify-content-center align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center bg-white p-5 w-auto gap-4">
            <h1  class="fw-bolder">Login</h1>
            <form  method="post" class="gap-4 d-flex flex-column ">
                <div>
                    <label for="" class="d-block">Username</label>
                    <div class="log position-relative"><i class="fa-solid fa-user"></i><input type="text"  required="true" name="username" placeholder="Username.."></div>             
                </div>
                <div>
                    <label for="" class="d-block">Password</label>
                    <div class="log position-relative"> <i class="fa-solid fa-lock"></i><input type="password" required="true" name="password"  placeholder="Password.."></div>
                </div>
                <?php
                ini_set('display_errors', 0);
                    $password=$_POST["password"];
                    $username=$_POST["username"];
                    if((strlen($username)>4 and strlen($username)<12) and (strlen($password)>4 and strlen($password)<12)){
                        //search in database
                        //if found
                        //Enter homepage
                        //else
                        //else
                        //echo "<H6  class=\"error\">Username or password is incorret</H6>";
                    }                     
                    else{
                        echo "<H6  class=\"error\">Username or password is incorret</H6>";
                    }
                ?>       
                <input class="loginbt" type="submit" name="" id="">
                <p>Dont have an Account<span class="fw-bold"> SignUp.</span></p>
                <button class="loginbt"><a href="">Create An Account</a></button>
            </form>
        </div>

    </div>

    <script src="https://kit.fontawesome.com/8741f503b5.js" crossorigin="anonymous"></script>
</body>
</html>