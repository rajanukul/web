<style>
    .card{
        background-color:#454d59!important;
        color:white;
    }
</style>
<?php

include("config/dbcon.php");

include("authentication.php");

include("includes/header.php");

include("includes/topbar.php");

include("includes/sidebar.php");





?>

<div class="content-wrapper">



    <?php

    if(isset($_GET['job_id'])){

        $job_id=$_GET['job_id'];

        $query="select * from jobs where id='$job_id'";

        $query_run=mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0){

            $jobItem=mysqli_fetch_array($query_run);

            ?>

            

            <section class="content mt-4">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <?php include('message.php');?>

                            <div class="card">

                                <div class="card-header">

                                    <h4>

                                        Edit Job

                                        <a href="jobs.php" class="btn btn-danger float-right">Back</a>

                                    </h4>

                                </div>

                                <div class="card-body">

                                    <form action="code.php" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="job_id" value="<?=$jobItem['id']?>">

                                        

                                        <div class="row">

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <label>Name of Company</label>

                                                    <input type="text" name="name" value="<?=$jobItem['name']?>" class="form-control" placeholder="Enter Job Title">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <label>About Company</label>

                                                    <textarea id="editor1" name="about" required row="3" class="form-control" placeholder="Enter Job Description"><?=$jobItem['about_comapny']?></textarea>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <label>Job Description</label>

                                                    <textarea id="editor2" name="description" required row="3" class="form-control" placeholder="Enter Job Description"><?=$jobItem['jd']?></textarea>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Website</label>

                                                    <input type="text" name="website" value="<?=$jobItem['website']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Position</label>

                                                    <input type="text" name="position" value="<?=$jobItem['position']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Job Posted on</label>

                                                    <input type="date" value="<?=$jobItem['date']?>" name="dateon" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Batch</label><br>

                                                    <input type="text" name="batch" value="<?=$jobItem['batch']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Stream Required</label><br>

                                                    <input type="text" name="stream" value="<?=$jobItem['stream_required']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Location</label><br>

                                                    <input type="text" name="location" value="<?=$jobItem['location']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Salary</label><br>

                                                    <input type="text" name="salary" value="<?=$jobItem['salary']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Job Type</label><br>

                                                    <input type="text" name="jobtype" value="<?=$jobItem['job_type']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label>Employee Link</label><br>

                                                    <input type="text" name="elink" value="<?=$jobItem['employee_link']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <label>Job Link</label><br>

                                                    <input type="text" name="joblink" value="<?=$jobItem['job_link']?>" class="form-control" placeholder="Enter">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <label>Company Logo</label><br>

                                                    <input type="file" name="image" class="form-control">

                                                    <input type="hidden" name="old_logo" value="<?=$jobItem['logo']?>">



                                                </div>

                                                <img src="uploads/logos/<?=$jobItem['logo']?>" alt="logo" height="50px" width="50px">

                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <button type="submit" name="job_update" class="btn btn-primary">Update</button> 

                                                </div>

                                            </div>

                                        </div>

                                    </form>

                                    

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </section>

            <?php

        }

        else{



        }

    }

    ?>







    

</div>







<script type="text/javascript">



// Initialize CKEditor

CKEDITOR.replace('editor1',{



  

}); 

CKEDITOR.replace('editor2',{







});

</script>







<?php include("includes/script.php");?>

<?php include("includes/footer.php");?>