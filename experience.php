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


                
<div class="experience">
    <div class="title">
        <p>Company Interview Experiences</p>
    </div>
    <div class="content">
        <p>Welcome to the Interview Experience Corner, a valuable resource where you'll find firsthand accounts of real job interviews and the insights, tips, and lessons learned by candidates like you. We understand that the interview process can be both exciting and nerve-wracking. That's why we've created this platform, a hub of shared experiences, to help you navigate your own journey to career success. <br>
        Whether you're a recent graduate embarking on your first professional interview or a seasoned professional looking to make a career change, the Interview Experience Corner offers valuable insights to help you succeed. Use these stories as a guide to improve your interview skills, boost your confidence, and, ultimately, land the job you desire. <br>

        Explore the interviews, learn from the experiences, and set yourself on the path to a successful and fulfilling career. Your next opportunity may just be a click away!</p>
    </div>
    <div class="divide">
        <div class="left">
            <div class="left-content">
            
                <table>
                    <tr>
                        <th>Company Name</th>
                        <th>Position</th>
                        <th>Posted On</th>
                    </tr>
                    <?php

                    $query="select * from interview where status=1";

                    $query_run=mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0){

                        foreach($query_run as $job){

                    ?>
                    <tr>
                        <td><a href="interview_details.php?inter_id=<?=$job['inter_id'];?>"><?= $job['company'];?></a></td>
                        <td><a href="interview_details.php?inter_id=<?=$job['inter_id'];?>"><?= $job['role'];?></a></td>
                        <td><?= $job['date'];?></td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                </table>
                
            </div>
        </div>
        
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