<?php
include("frontend/includes/topscript.php");
include("frontend/includes/navbar.php");
include("frontend/includes/chatbot.php");
?>

<?php
include("adminware/config/dbcon.php");
?>
<head>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


  <title>The Job Company</title>
</head>

<style>
    .divide{
        height:100%;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    input[type="date"]{
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    select {
        height: 40px;
    }

    button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .container {
            padding: 10px;
        }
    }
    textarea{
        height:200px;
    }
    /* .ck-editor__editable[role="textbox"] {
            min-height: 100px;
            min-width:400px;
    }      */
    form{
        width:85%;
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

<div class="experience">
    <div class="title">
        <p>Add your Interview Experiences</p>
    </div>
    <div class="content">
        <p>Welcome to Interview Insights, a platform where you can share and discover valuable insights about recent interview experiences. Your firsthand accounts and reflections on the interview process can provide invaluable guidance to fellow job seekers, helping them navigate the often challenging and unpredictable world of job interviews.<br>
        </p>
    </div>
    <div class="divide">
        <div class="left">
            <div class="container">
                <h2>Details</h2>
                <form action="insert-code.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:(Optional)</label>
                        <input type="text" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:(Details will be hidden)</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Company Name:</label>
                        <input type="text" id="company" name="company" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Role:</label>
                        <input type="text" id="role" name="role" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Package :</label>
                        <input type="text" id="package" name="package" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Date of interview:</label>
                        <input type="date" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Experience:</label>
                        <textarea id="editor" name="message"></textarea>
                        <!-- <p id="editor">This is some sample content.</p> -->
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <select id="location" name="location">
                            <option value="Select One">Select One</option>
                            <option value="On Campus">On Campus</option>
                            <option value="Off Campus">Off Campus</option>
                        </select>
                    </div>

                    <button type="submit" name="add">Send</button>
                </form>
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

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

<script src="../frontend/assets/js/chatbot.js"></script>
  
  <?php
  include("frontend/includes/footer.php");
  ?>
</body>