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

<!-- Content Header (Page header) -->

<div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">Dashboard</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Edit-Registered Users</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->

    <div class="container">

        <!-- <div class="row"> -->

           

        <div class="card">

            <div class="card-header">

                <h3 class="card-title">Edit-Registered Users</h3>

                <a href="registered.php" class="btn btn-danger float-right">Back</a>

            </div>

              <!-- /.card-header -->

              <div class="card-body">

                <div class="row">

                    <div class="col-md-6">

    <form action="code.php" method="post">

      <div class="modal-body">

            <?php

            if(isset($_GET['user_id'])){

                $user_id=$_GET['user_id'];

                $query="select * from users where id='$user_id' LIMIT 1";

                $query_run=mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0){

                    foreach($query_run as $row){

                        ?>

                            <input type="hidden" name="user_id" value="<?php echo $row['id']?>">

                            <div class="form-group">

                                <label for="">Name</label>

                                <input name="name" value="<?php echo $row['name']?>" type="text" class="form-control" placeholder="Name">

                            </div>

                            <div class="form-group">

                                <label for="">Phone Number</label>

                                <input name="phone" value="<?php echo $row['phone']?>" type="text" class="form-control" placeholder="Phone Number">

                            </div>

                            <div class="form-group">

                                <label for="">Email Id</label>

                                <input name="email" value="<?php echo $row['email']?>" type="email" class="form-control" placeholder="Email">

                            </div>



                            <div class="form-group">

                                <label for="">Password</label>

                                <input name="password" value="<?php echo $row['password']?>" type="password" class="form-control" placeholder="Password">

                            </div>

                        <?php

                    }

                }

                else{

                    echo "<h4>No record found!!</h4>";

                }

            }

            ?>

            

      </div>

      <div class="modal-footer">

        <button type="submit" name="updateUser" class="btn btn-primary">Update</button>

      </div>

      </form>

                    </div>

                </div>

              </div>

        </div>

        </div>

    </div>

</div>

</div>

<?php

include("includes/script.php");

include("includes/footer.php");

?>