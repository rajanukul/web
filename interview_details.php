<?php
include("frontend/includes/topscript.php");
include("frontend/includes/navbar.php");
include("frontend/includes/chatbot.php");
?>

<?php
include("adminware/config/dbcon.php");
?>
<head>
  
  <title>The Job Company</title>
</head>

<style>
    
</style>
<body id="bodypre" style="background-image: url(../frontend/assets/images/main-background.jpg);">
<!-- preloader -->
<div class="loader-wrapper">
  <div class="loader">
    
  </div>
  <p>Please Wait..</p>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>
<?php

if(isset($_GET['inter_id'])){

    $job_id=$_GET['inter_id'];

    $query="select * from interview where inter_id='$job_id'";

    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){

        $jobItem=mysqli_fetch_array($query_run);

?>
<div class="experience">
    <div class="title">
        <p><?php echo $jobItem["company"]; ?> Recruitment Process</p>
    </div>
    <div class="content">
        <p>Welcome to the Interview Experience Corner, a valuable resource where you'll find firsthand accounts of real job interviews and the insights, tips, and lessons learned by candidates like you. We understand that the interview process can be both exciting and nerve-wracking. That's why we've created this platform, a hub of shared experiences, to help you navigate your own journey to career success. <br>
        <?php echo $jobItem["company"]; ?> conducted <?php echo $jobItem["mode"]; ?> placement drive on <?php echo $jobItem["date"]; ?> below is the interview experience of one of the candidate who appeared for it.  </p>

    </div>
    <div class="divide">
        <div class="left">
            <p><?php echo $jobItem["details"]; ?></p>
        </div>
        <?php
        }
        }
        ?>
        <div class="right">
            
                <?php
                $query="select * from jobs order by id DESC limit 7";
                $query_run=mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0){
                    foreach($query_run as $job){
                ?>
            <a href="frontend/job_details.php?job_id=<?=$job['id'];?>">
                <div class="box">
                    <div class="logo">
                    <img src="../adminware/uploads/logos/<?php echo $job["logo"]; ?>" alt="">
                    </div>
                    <div class="details">
                        <p class="name"><?php echo $job["name"]; ?></p>
                        <p class="role"><strong>Role :</strong>  <?php echo $job["position"]; ?></p>
                        <p class="salary"><strong>Salary :</strong>  <?php echo $job["salary"]; ?></p>
                    </div>
                </div>
            </a>
            <?php
            }
            }
            ?>
        </div>
    </div>
</div>




<!-- preloader -->
<script>
  window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded")  
});
</script>


<script src="../frontend/assets/js/chatbot.js"></script>
  
  <?php
  include("frontend/includes/footer.php");
  ?>
</body>