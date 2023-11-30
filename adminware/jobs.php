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

                                jobs

                                <a href="job-add.php" class="btn btn-primary float-right">ADD</a>

                            </h4>

                        </div>

                        <div class="card-body">

                            <table class="table table-bordered">

                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Company Name</th>

                                        <th>Position</th>

                                        <th>Batch</th>

                                        <th>Job Posted on</th>

                                        <th>Link</th>

                                        <th>Edit</th>

                                        <th>Delete</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    $query="select * from jobs order by id DESC";

                                    $query_run=mysqli_query($con,$query);

                                    if(mysqli_num_rows($query_run)>0){

                                        foreach($query_run as $job){

                                            ?>

                                            <tr>

                                                <td><?= $job['id'];?></td>

                                                <td><?= $job['name'];?></td>

                                                <td><?= $job['position'];?></td>

                                                <td><?= $job['batch'];?></td>

                                                <td><?= $job['date'];?></td>

                                                <td><?= $job['job_link'];?></td>

                                                

                                                <td>

                                                    <a href="job-edit.php?job_id=<?=$job['id'];?>" class="btn btn-success">Edit</a>

                                                </td>

                                                <td>

                                                    <form action="code.php" method="post">

                                                        <input type="hidden" name="job_delete_id" value="<?= $job['id'];?>">

                                                        <button type="submit" name="job_delete_btn" class="btn btn-danger">Delete</button>

                                                    </form>

                                                </td>

                                            </tr>

                                            <?php

                                        }

                                    }

                                    else{

                                        echo "No record Found!!";

                                    }

                                    ?>

                                    

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </section>

</div>





<?php include("includes/script.php");?>

<?php include("includes/footer.php");?>

