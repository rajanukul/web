<?php

include("../frontend/includes/topscript.php");

include("../frontend/includes/navbar.php");

include("../adminware/config/dbcon.php");

include("../frontend/includes/chatbot.php");

?>

<head>

  

  <title>Job Description</title>

</head>

<body style="background-image: url(assets/images/main-background.jpg);">

    <?php

        if(isset($_GET['job_id'])){

            $job_id=$_GET['job_id'];

            $query="select * from jobs where id='$job_id'";

            $query_run=mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)>0){

                $jobItem=mysqli_fetch_array($query_run);

                $link="https://".$jobItem["job_link"];

                // echo $link;

    ?>

  <p class="applyp">Join our groups for daily update regarding Campus Drives</p>

    <div class="linkdiv"> 

        <a style="background-color: #25D366;" href="https://chat.whatsapp.com/LybKuVKAHx4Lqef98vdL5s" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

        <a style="background-color: #F56040;" href="https://www.instagram.com/thejobcompany.in/" target="_blank"><i class="fa-brands fa-instagram"></i></a>

        <a style="background-color: #0088cc;" href="https://www.linkedin.com/company/jobcompanyin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

    </div>

  

    <div class="counter">

        <div class="nums">

            <span class="in">4</span>

            <span>3</span>

            <span>2</span>

            <span>1</span>

            <span>0</span>

        </div>

        <h4>Link will be activated after</h4>

    </div>

                

    <div class="applydi" id="box">

        <a href="<?php echo $link; ?>" target="_blank">Apply Now</a>

    </div>

    <p style="font-size:22px;text-align:center;font-weight:600;color:#fff;margin-bottom:5%;margin-top: 30%;">Click on the Apply Now button to apply for <?php echo $jobItem["name"]; ?></p>

    <?php

        }

        

    }

    ?>

<?php

include("../frontend/includes/footer.php");

include("../frontend/includes/bottomscript.php");

?>



</body>

<!-- <a style="color:white;" href="www.google.co.in">Apply</a> -->