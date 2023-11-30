<style>
  .navbar-white {
    background-color: #454d59;
}
.navbar-light .navbar-nav .nav-link {
    color: white;
}
.btn:not(:disabled):not(.disabled) {
    color:white;
}
</style>

<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="index3.html" class="nav-link">Home</a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="#" class="nav-link">Contact</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="navbar-search" href="#" role="button">

          <i class="fas fa-search"></i>

        </a>

        <div class="navbar-search-block">

          <form class="form-inline">

            <div class="input-group input-group-sm">

              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

              <div class="input-group-append">

                <button class="btn btn-navbar" type="submit">

                  <i class="fas fa-search"></i>

                </button>

                <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                  <i class="fas fa-times"></i>

                </button>

              </div>

            </div>

          </form>

        </div>

      </li>

    </ul>



    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      

      <!-- Navbar Search -->

      



      

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <button class="btn">

            <?php 

            if(isset($_SESSION['auth'])){

              echo $_SESSION['auth_user']['user_name'];

            }

            else{

              echo "Login";

              

            }

            ?>

          </button>

          <!-- <span class="badge badge-warning navbar-badge">15</span> -->

        </a>

        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

          <!-- <div class="dropdown-divider"></div>

          

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

             8 friend requests

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-file mr-2"></i> 3 new reports

          </a> -->

          <form action="code.php" method="post">

            <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>

          </form>

        </div>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="fullscreen" href="#" role="button">

          <i class="fas fa-expand-arrows-alt"></i>

        </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">

          <i class="fas fa-th-large"></i>

        </a>

      </li>

    </ul>

  </nav>

  <!-- /.navbar -->