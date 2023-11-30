<?php



include("../adminware/config/dbcon.php");

?>
<?php
include("includes/topscript.php");
include("includes/navbar.php");
include("includes/chatbot.php");
?>
<?php

if(isset($_POST['submit'])){

    $name=$_POST['name'];

    $email=$_POST['email'];

    $message=$_POST['message'];

    $query="insert into feedback (name,email,message) values('$name','$email','$message')";

    $query_run=mysqli_query($con,$query);

    if($query_run){

        

        // header("Location:../index.php");
        echo '<script>alert("Feedback Sent!, Thank you!")</script>';
        
    }

    else{

        echo '<script>alert("Something went wrong!")</script>';

        // header("Location:index.php");



    }



}

?>

<style>

    h2{

        color:white;

    }

    button{

        padding: 15px;

    color: #FFF;

    background-color: red;

    font-size: 30px;

    border-radius: 10px;

    text-decoration: none;

    width: 150px;

    text-align: center;

    }

</style>

<body style="background-image: url(assets/images/main-background.jpg);">

   <h2>Click on the button below to go back. </h2>

   <p id = "result"></p>

   <button onclick = "redirect()">Click Me!</button>

   <script>

      function redirect () {

         setTimeout(myURL, 3000);

         var result = document.getElementById("result");
         document.getElementById("result").style.color = "white";
         result.innerHTML = "<b> You will be redirected after 3 seconds";

      }



      function myURL() {

         document.location.href = '../index.php';

      }

   </script>

<script src="../frontend/assets/js/chatbot.js"></script>
  
  <?php
  include("includes/footer.php");
  ?>
</body>