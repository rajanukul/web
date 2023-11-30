<?php

include("../frontend/includes/topscript.php");

include("../frontend/includes/navbar.php");

include("../frontend/includes/chatbot.php");

include("../adminware/config/dbcon.php");



?>

<head>

  

  <title>Job Description</title>

</head>
<style>
    .categorydiv a{
        text-decoration:none;
        color:black;
        font-weight:600;
    }
    .categorydiv a:hover{
        
        color:blue;
    }
    .categorydiv p{
        text-align:center;
    }
</style>
<body style="background-image: url(../frontend/assets/images/main-background.jpg);">

<!-- preloader -->

<div class="loader-wrapper">

  <div class="loader">

  </div>

  <div class="loader-section section-left"></div>

  <div class="loader-section section-right"></div>

</div>



<?php

    if(isset($_GET['job_id'])){

        $job_id=$_GET['job_id'];

        $query="select * from jobs where id='$job_id'";

        $query_run=mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0){

            $jobItem=mysqli_fetch_array($query_run);

?>

<div class="details_center">

    <p class="title"><?php echo $jobItem["name"]; ?> is Hiring for <?php echo $jobItem["position"]; ?></p>

</div>

<div class="details_main">

    <div class="company_image">

        <img src="../adminware/uploads/logos/<?php echo $jobItem["logo"]; ?>" alt="">

    </div>

    <p class="intro"><?php echo $jobItem["name"]; ?> is Hiring for <?php echo $jobItem["position"]; ?> Role. Interested Candidates can go through the details and apply using the link provided at the bottom of the Post.</p>



    <!-- about company -->

    <div class="about">

        <p class="title">About <?php echo $jobItem["name"]; ?></p>

        <div class="content"><?php echo $jobItem["about_comapny"]; ?></div>

    </div>



    <!-- All Details -->

    <div class="about">

        <p class="title"><?php echo $jobItem["name"]; ?> Job Information</p>

        <table class="table">

            

                <tr>

                    <td style="font-weight:600">Company name</td>

                    <td ><?php echo $jobItem["name"]; ?></td>

                    

                </tr>

                <tr style="background-color: #fff;">

                    <td style="font-weight:600">Website</td>

                    <td class="small"><?php echo $jobItem["website"]; ?></td>

                    

                </tr>

                <tr>

                    <td style="font-weight:600">Position</td>

                    <td ><?php echo $jobItem["position"]; ?></td>

                    

                </tr>

                <tr style="background-color: #fff;">

                    <td style="font-weight:600">Work Location</td>

                    <td ><?php echo $jobItem["location"]; ?></td>

                    

                </tr>

                <tr>

                    <td style="font-weight:600">Job Type</td>

                    <td ><?php echo $jobItem["job_type"]; ?></td>

                    

                </tr>

                <tr style="background-color: #fff;">

                    <td style="font-weight:600">Date Posted on</td>

                    <td ><?php echo $jobItem["date"]; ?></td>

                    

                </tr>

                <tr>

                    <td style="font-weight:600">Stream Required</td>

                    <td ><?php echo $jobItem["stream_required"]; ?></td>

                    

                </tr>

                <tr style="background-color: #fff;">

                    <td style="font-weight:600">Batch</td>

                    <td ><?php echo $jobItem["batch"]; ?></td>

                    

                </tr>

                <tr>

                    <td style="font-weight:600">Package</td>

                    <td ><?php echo $jobItem["salary"]; ?></td>

                    

                </tr>

                

            </tbody>

        </table>

    </div>



    <!-- Job Description -->

    <div class="about">

        <p class="title">Job Description</p>

        <div class="content"><?php echo $jobItem["jd"]; ?></div>

    </div>

    <!-- Alerts -->

    <div class="about">

        <p class="title">Get Job Alerts</p>

    </div>

    <div class="alert-row">

      <div class="acard">

        <a style="background-color: #25D366;" href="https://chat.whatsapp.com/LybKuVKAHx4Lqef98vdL5s" target="_blank">

        <i class="fa-brands fa-whatsapp"></i>



        </a>

      </div>

      <div class="acard">

        <a style="background-color: #0072b1;" href="https://www.linkedin.com/company/jobcompanyin/" target="_blank">

        <i class="fa-brands fa-linkedin-in"></i>

        </a>

      </div>

      <div class="acard">

        <a style="background-color: #F56040;" href="https://www.instagram.com/thejobcompany.in/" target="_blank">

        <i class="fa-brands fa-instagram"></i>



        </a>

      </div>

      <div class="acard">

        <a style="background-color: #0088cc;" href="https://t.me/+iF6AfrtRFhU1NjVl" target="_blank">

        <i class="fa-brands fa-telegram"></i>

        </a>

      </div>

    </div>

       

    <div class="about">
        <p class="title"><span>Find Based on Roles</span></p>
    </div>
    <div class="categorydiv">
        <p><a href="../job-category/software-Engineer.php">Software Developer</a></p>
        <p><a href="../job-category/devops-cloud.php">Devops and Cloud</a></p>
        <p><a href="../job-category/web-development.php">Web Developer</a></p>
        <p><a href="../job-category/data-analyst.php">Data Analyst</a></p>
        <p><a href="../job-category/data-science.php">Data Science</a></p>
        <p><a href="../job-category/system-engineer.php">System Engineer</a></p>
        <p><a href="../job-category/graduate-engineer-trainee.php">Graduate Engineer Trainee</a></p>
    </div>
    <div class="about">
        <p class="title"><span>Which Batch Are you from?</span></p>
    </div>
    <div class="categorydiv">
        <p><a href="../job-category/batch/2026.php">2026 Batch</a></p>
        <p><a href="../job-category/batch/2025.php">2025 Batch</a></p>
        <p><a href="../job-category/batch/2024.php">2024 Batch</a></p>
        <p><a href="../job-category/batch/2023.php">2023 Batch</a></p>
        <p><a href="../job-category/batch/2022.php">2022 Batch</a></p>
        <p><a href="../job-category/batch/2021.php">2021 Batch</a></p>
        <p><a href="../job-category/batch/more.php">More</a></p>
    </div>

    

    

    <div class="about">

        <p class="title"><span>Apply Now</span></p>

    </div>

    <p style="text-align:center;font-weight:600">Click on the Apply Now button to apply for <?php echo $jobItem["name"]; ?></p>

    <div class="applydiv">

        

        <a class="textblink" href="apply_page.php?job_id=<?=$jobItem['id'];?>">Apply Now</a>

    </div>

</div>

<?php

        }

        

    }

    ?>





<!-- preloader -->

<script>

  window.addEventListener('load',function(){

  document.querySelector('body').classList.add("loaded")  

});





</script>

<?php

include("../frontend/includes/footer.php");

?>

</body>