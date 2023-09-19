<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="../css/sign-login.css">

        <title> Login</title>
        <script src="../js/login.js"></script>
        <h4>
            <?php

            error_reporting(0);
            session_start();
            session_destroy();

            echo $_SESSION['loginMessage'];


            ?>
        </h4>
    </head>
    <body>
        <div id="error"></div>
    <!--login start--> 
    <div class="bottom">
        <div class="loginarea">
            <h1> Login</h1>
            <form onsubmit="return validate()" action="login_check.php"  method="post">

            <?php

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>

                
                <label>Email</label>
                <input id="em"type="text" placeholder="Enter Email" name="email">
                

              
                <label>Password</label>
                <input id="pas"type="password" placeholder="Enter a Password" name="password"><br><br>
              


                 <input  type="submit" class="btn"value="Submit" name="submit">
            </form>
            <p class="link2">If you dont have an account <a href="signup.php">Sign Up Now</a></p>
        </div>
    </div>
    <!--login end-->




    </body>
    </html>