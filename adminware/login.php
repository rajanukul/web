<?php

session_start();

include("includes/header.php");

if(isset($_SESSION['auth'])){

    $_SESSION['status']="you r already logged in! ";

    header("Location:index.php");

    exit(0);

}

?>

    

    

<div class="auth">

    

    <div class="auth_in">

        <p class="heading">Login to your account</p>

        <?php

        if(isset($_SESSION['auth_status'])){

            ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                <strong>Hey!</strong> <?php echo $_SESSION['auth_status'];?>

                <button type="button" class="close" data-dismiss="alert" aria-label="close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <?php

            unset($_SESSION['auth_status']);

        }

        ?>

        

        <?php

        include("message.php");

        ?>

        <form action="logincode.php" method="POST">

            <p class="field">Email</p>

            <input type="email" name="email">

            <p class="field">Password</p>

            <input type="password" name="password"><br>

            <div class="check">

                <input type="checkbox"><span class="small">Remember Me</span><br>

            </div>

            <input type="submit" name="login_btn" value="Login">

            <!-- <p class="small">New to MyApp? <a href="#">Sign Up</a></p> -->



        </form>

    </div>

</div>



<?php include("includes/script.php");?>





