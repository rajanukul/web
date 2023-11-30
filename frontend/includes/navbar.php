<!-- <script>

    const toggle = () => {

    document.getElementById("nav").classList.toggle("navactive");

    };



</script>

<style>
    .brand{
        height:105px;
        width:130px;
    }
    .brand img{
        height:105px;
        width:130px;
    }
</style>

<div class="bg">

    <header>


            <div class="brand">

            <a href="../../index.php">
                <img src="../frontend/assets/images/the-job.png" alt="">
            </a>


            </div>


        <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>

        <div class="navbar" id="nav">

            <div class="searchBox">

                <input type="text" placeholder="Search here..." />

                <span class="fas fa-search" id="searchIcon"></span>

            </div>

            <ul>

                <li>

                    <span class="fas fa-home" id="headIcon"></span>

                    <a href="../../index.php"> Home </a>

                </li>

                <li>

                    <span class="fa fa-user-circle" id="headIcon"></span>

                    <a class="js-link" href="experience.php"> Interviews </a>
                    
                </li>
                <li>

                    <span class="fas fa-graduation-cap" id="headIcon"></span>

                    <a href="../../index.php"> Fresher's </a>

                </li>

            

            </ul>

        </div>

    </header>

</div> -->

<style>
	.navbar {
	  overflow: hidden;
      background-color:#001937;
	}

	.navbar a {
	  float: left;
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 20px;
	}


	.navbar .icon {
	  display: none;
	}

	.navbar .dropdown {
	  float: left;
	  overflow: hidden;
	}

	.navbar .dropdown .btn {
	  font-size: 20px;    
	  border: none;
	  outline: none;
	  color: white;
	  padding: 14px 16px;
	  background-color: inherit;
	  margin: 0;
	}

	.navbar .dropdown-menu {
	  display: none;
	  position: absolute;
	  background-color: #001937;
	  min-width: 160px;
	  z-index: 1;
	}

	.navbar .dropdown-menu a {
	  float: none;
	  color: white;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	  text-align: left;
	}


	.navbar .dropdown-menu a:hover {
	  background-color: #cccccc;
	  color: black;
	}

	.navbar .dropdown:hover .dropdown-menu {
	  display: block;
	}
	@media screen and (max-width: 600px) {
        .navbar .dropdown-menu{
            box-shadow: 0px 8px 16px 0px white;
        }
		.navbar a { 
			display: none;
		}
		.navbar .dropdown .btn {
			display: none;
	  	}
	  	.navbar a.icon {
			float: left;
			display: block;
		}
	}

	@media screen and (max-width: 600px) {
	  .navbar.responsive {position: relative;}
	  .navbar.responsive .icon {
		position: absolute;
		right: 0;
		top: 0;
	  }
	  .navbar.responsive a {
		float: none;
		display: block;
		text-align: left;
		
	  }
	  .navbar.responsive .dropdown {float: none;}
	  .navbar.responsive .dropdown-menu {position: relative;}
	  .navbar.responsive .dropdown .btn {
		display: block;
		width: 100%;
		text-align: left;
	  }
	}
    .navbar img{
        height:65px;
        width:90px;
    }
	@media(min-width:1300px){
		.navbar .extra{
			margin-left: 20%;
		}
	}
	@media(min-width:1100px) and (max-width:1300px){
		.navbar .extra{
			margin-left: 10%;
		}
	}
	@media(min-width:600px) and (max-width:830px){
		.navbar a {
			font-size: 16px;
		}
		.navbar .dropdown .btn {
			font-size: 16px;    
			
		}
	}
	@media(min-width:850px) and (max-width:1100px){
		.navbar .extra{
			margin-left: 7%;
		}
	}
</style>
<div class="bg">
    <div class="navbar" id="nav">
        <a href="../../index.php">
            <img src="../../frontend/assets/images/the-job.png" alt="">
        </a>
        <a class="extra" style="margin-top: 1%;" href="../../index.php">Home</a>
        <!-- <a style="margin-top: 1%;" href="experience.php">Interviews</a> -->
        <div style="margin-top: 18px;"class="dropdown">
            <button class="btn">All Jobs 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
                <a href="../../job-category/software-Engineer.php">Software Developer</a>
                <a href="../../job-category/devops-cloud.php">Devops and Cloud</a>
                <a href="../../job-category/web-development.php">Web Developer</a>
				<a href="../../job-category/data-analyst.php">Data Analyst</a>
				<a href="../../job-category/data-science.php">Data Science</a>
				<a href="../../job-category/system-engineer.php">System Engineer</a>
				<a href="../../job-category/graduate-engineer-trainee.php">Graduate Engineer Trainee</a>
            </div>
        </div> 
		<div style="margin-top: 18px;"class="dropdown">
            <button class="btn">Batch-Wise 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
                <a href="../../job-category/batch/2026.php">2026</a>
				<a href="../../job-category/batch/2025.php">2025</a>
				<a href="../../job-category/batch/2024.php">2024</a>
				<a href="../../job-category/batch/2023.php">2023</a>
				<a href="../../job-category/batch/2022.php">2022</a>
				<a href="../../job-category/batch/2021.php">2021</a>
				<a href="../../job-category/batch/more.php">More</a>
                
            </div>
        </div> 
        <a style="margin-top: 1%;" href="../../job-category/internships.php">Internships</a>
		<div style="margin-top: 18px;"class="dropdown">
            <button class="btn">Interviews 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
                <a href="../../experience.php">Experience</a>
                <a href="../../add_experience.php">Post your Experience</a>
            </div>
        </div> 
        <a href="javascript:void(0);" style="font-size:22px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

</div>
	
	
<script>
		function myFunction() {
		  var x = document.getElementById("nav");
		  if (x.className === "navbar") {
			x.className += " responsive";
		  } else {
			x.className = "navbar";
		  }
		}
</script>
