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

    <section class="content mt-4">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <?php include('message.php');?>

                    <div class="card">

                        <div class="card-header">

                            <h4>

                                Add Jobs

                                <a href="jobs.php" class="btn btn-danger float-right">Back</a>

                            </h4>

                        </div>

                        <div class="card-body">

                            <form action="code.php" method="post" enctype="multipart/form-data">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="form-group">

                                            <label>Name of Company</label>

                                            <input type="text" name="name" class="form-control" placeholder="Enter Job Title">

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label>About Company</label>

                                            <textarea id="editor1" name="about"  class="form-control" placeholder="Enter Job Description"></textarea>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label>Job Description</label>

                                            <textarea id="editor2" name="description" required class="form-control" placeholder="Enter Job Description"></textarea>

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Website</label>

                                            <input type="text" name="website" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Position</label>

                                            <input type="text" name="position" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Job Posted on</label>

                                            <input type="date" name="dateon" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Batch</label><br>

                                            <input type="text" name="batch" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Stream Required</label><br>

                                            <input type="text" name="stream" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Location</label><br>

                                            <input type="text" name="location" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Salary</label><br>

                                            <input type="text" name="salary" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Job Type</label><br>

                                            <input type="text" name="jobtype" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group">

                                            <label>Employee Link</label><br>

                                            <input type="text" name="elink" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label>Job Link</label><br>

                                            <input type="text" name="joblink" class="form-control" placeholder="Enter">

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label>Company Logo</label><br>

                                            <input type="file" name="image" required>

                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="form-group">

                                            <label>Click to save</label><br>

                                            <button type="submit" name="job_save" class="btn btn-primary btn-block">Save</button> 

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