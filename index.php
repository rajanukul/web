
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
  .pagination{
    text-align:center;
  }
  .pagination a{
    color:black;
    margin:5px;
    border:1px solid white;
    background-color:white;
    padding:10px;
    text-decoration:none;
    border-radius:5px;
  }
  .pagination p{
    margin-bottom:20px;
    color:white;
  }
  @media(max-width:420px){
    .pagination a{
    padding:5px;
    text-decoration:none;
    border-radius:5px;
  }
  }
  
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



  <div class="center">
    <p class="title">The Job Company</p>
  </div>
  <div class="jobs">
    <p class="title">Opportunities</p>
  </div>
  <div class="parent">
  <?php
    $query="select * from jobs";
    $query_run=mysqli_query($con,$query);
    $num_per_page=12;
    if(isset($_GET["page"])){
      $page=$_GET["page"];
    }
    else{
      $page=1;
    }
    $start_from=($page-1)*12;
    $query="select * from jobs order by id DESC limit $start_from,$num_per_page";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $job){
    ?>
    <div class="child">
        <div class="clogo">
          <img src="../adminware/uploads/logos/<?php echo $job["logo"]; ?>" alt="">
        </div>
        <div class="content">
          <p class="cname"><?php echo $job["name"]; ?></p>
          <p class="role"><span>Role :</span> <?php echo $job["position"]; ?></p>
          <p class="batch"><span>Batch :</span> <?php echo $job["batch"]; ?></p>
          <p class="location"><span>Location :</span> <?php echo $job["location"]; ?></p>
          <p class="salary"><span>Salary :</span> <?php echo $job["salary"]; ?></p>
          <a href="frontend/job_details.php?job_id=<?=$job['id'];?>" class="applyBtn">Apply</a>
        </div>
    </div>
    <?php
      }
    }
      ?>
    
  </div>
  <?php
  ?>
  <div class="pagination">
    <p>See all jobs</p>
  <?php
    $sql="select * from jobs";
    $rs_result=mysqli_query($con,$sql);
    $total_records=mysqli_num_rows($rs_result);
    $total_pages=ceil($total_records/$num_per_page);
    for($i=1;$i<=$total_pages;$i++){
      echo "<a href='index.php?page=".$i."'>".$i."</a>";
    }
    ?>
  </div>
  
  <!-- experience -->
  <div class="alert" style="background-color:white; padding:10px;">
  <p class="title title-sm" style="color:black;">Post your Interview Experience</p>
  <div class="job-row">
    
    <div class="card" style="box-shadow:none;">
      <a style="background-color: #0072b1; width:85px; border-radius: 5%; font-size:19px;" href="add_experience.php">
      <i class="fa-solid fa-computer-mouse"></i>
      <p>Post</p>
      </a>
    </div>
  </div>
  
    
  </div>



  <div class="alert">
    <p class="title">Get Alerts</p>
    <div class="job-row">
      <div class="card">
        <a style="background-color: #25D366;" href="https://chat.whatsapp.com/LybKuVKAHx4Lqef98vdL5s" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>

        </a>
      </div>
      <div class="card">
        <a style="background-color: #0072b1;" href="https://www.linkedin.com/company/jobcompanyin/" target="_blank">
        <i class="fa-brands fa-linkedin-in"></i>
        </a>
      </div>
      <div class="card">
        <a style="background-color: #F56040;" href="https://www.instagram.com/thejobcompany.in/" target="_blank">
        <i class="fa-brands fa-instagram"></i>

        </a>
      </div>
      <div class="card">
        <a style="background-color: #0088cc;" href="https://t.me/+iF6AfrtRFhU1NjVl" target="_blank">
          <i class="fa-brands fa-telegram"></i>
        </a>
      </div>
    </div>
    
    
  </div>


  <div class="upcome">
    <p class="title">Upcoming Features</p>
  </div>
  <div class="upcoming">
    
    <div class="upcoming-in">
      <div class="box">
          <h2>01</h2>
          <h3>Specific Job Type</h3>
          <p>
              Soon you will find different section for diffrent job type. Like different section for internship, private and government jobs
          </p>
      </div>
      <div class="box">
          <h2>02</h2>
          <h3>Free Coupoun Codes</h3>
          <p>
              Coupoun code, that will give you courses free of cost from different websites like Udemy, Coursera and differnt other platforms.
          </p>
      </div>
      <div class="box">
          <h2>03</h2>
          <h3>Collaboration</h3>
          <p>
              We are trying to Collaborate with diffrent platform, and provide you best industry courses that will help you get into your dream company.
          </p>
      </div>
    </div>
  </div>

 







  <div class="feed">
    <p class="title">Send Feedback</p>
  </div>
  <div class="feedback" id="contact">
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Chandigarh University</div>
            <div class="text-two">Mohali, Punjab</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+0098 9893 5647</div>
            <div class="text-two">+0096 3434 5678</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">thejobcompany@gmail.com</div>
            <div class="text-two">query@thejobcompany.in</div>
          </div>
        </div>
        
        <div class="right-side">
          <div class="topic-text">Send us Feedback</div>
          <p>For us user's feedback is top-most important. Feel free to suggest changes that will make us better in future.</p>
        <form action="../frontend/frontcode.php" method="post">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box message-box">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Write message here..." required></textarea>
          </div>
          <div class="button">
            <input type="submit" name="submit" value="Send Now" >
          </div>
        </form>
      </div>
      </div>
    </div>
  </div>

<!-- preloader -->
<script>
  window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded")  
});
</script>


<!-- <script src="../frontend/assets/js/chatbot.js"></script> -->
  
  <?php
  include("frontend/includes/footer.php");
  ?>
</body>
