<?php
include("../../frontend/includes/topscript.php");
include("../../frontend/includes/navbar.php");
include("../../frontend/includes/chatbot.php");
?>

<?php
include("../../adminware/config/dbcon.php");
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
<body id="bodypre" style="background-image: url(../../frontend/assets/images/main-background.jpg);">
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
    <p class="title">Opportunities For 2026 Batch</p>
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
    $query="select * from jobs where batch like '2026' or batch like '%2026%' or batch like '2026%' or batch like '%2026' order by id DESC limit $start_from,$num_per_page";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $job){
    ?>
    <div class="child">
        <div class="clogo">
          <img src="../../adminware/uploads/logos/<?php echo $job["logo"]; ?>" alt="">
        </div>
        <div class="content">
          <p class="cname"><?php echo $job["name"]; ?></p>
          <p class="role"><span>Role :</span> <?php echo $job["position"]; ?></p>
          <p class="batch"><span>Batch :</span> <?php echo $job["batch"]; ?></p>
          <p class="location"><span>Location :</span> <?php echo $job["location"]; ?></p>
          <p class="salary"><span>Salary :</span> <?php echo $job["salary"]; ?></p>
          <a href="../../frontend/job_details.php?job_id=<?=$job['id'];?>" class="applyBtn">Apply</a>
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
        $sql="select * from jobs where batch like '2026' or batch like '%2026%' or batch like '2026%' or batch like '%2026' ";
        $rs_result=mysqli_query($con,$sql);
        $total_records=mysqli_num_rows($rs_result);
        $total_pages=ceil($total_records/$num_per_page);
        for($i=1;$i<=$total_pages;$i++){
        echo "<a href='2026.php?page=".$i."'>".$i."</a>";
        }
    ?>
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
  <!-- preloader -->
<script>
  window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded")  
});
</script>


  
  <?php
  include("../../frontend/includes/footer.php");
  ?>
</body>