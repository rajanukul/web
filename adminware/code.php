<?php
session_start();
include("config/dbcon.php");
include('authentication.php');

//jobs

//jobs update

if(isset($_POST['job_update'])){
    $job_id=$_POST['job_id'];
    $name=$_POST['name'];
    $about=$_POST['about'];
    $description=$_POST['description'];
    $website=$_POST['website'];
    $position=$_POST['position'];
    $date=date('Y-m-d', strtotime($_POST['dateon']));
    $batch=$_POST['batch'];
    $stream=$_POST['stream'];
    $location=$_POST['location'];
    $salary=$_POST['salary'];
    $jobtype=$_POST['jobtype'];
    $elink=$_POST['elink'];
    $joblink=$_POST['joblink'];
    $image=$_FILES['image']['name'];
    $old_logo=$_FILES['old_logo'];

    if($image!=''){
        $update_filename=$_FILES['image']['name'];

        $allowed_extension=array('png','jpg','jpeg');
        $file_extension=pathinfo($update_filename,PATHINFO_EXTENSION);
        $filename=time().'.'.$file_extension;
        if(!in_array($file_extension,$allowed_extension)){
            $_SESSION['status']="Only jpg, png, jpeg format is allowed";
            header('Location:job-add.php');
            exit(0);
        }
        $update_filename=$filename;
    }
    else{
        $update_filename=$old_logo;
    }

    $query="update jobs set
                name='$name',
                about_comapny='$about',
                jd='$description',
                website='$website',
                date='$date',
                position='$position',
                batch='$batch',
                stream_required='$stream',
                location='$location',
                salary='$salary',
                job_type='$jobtype',
                employee_link='$elink',
                job_link='$joblink',
                logo='$update_filename'
                where id='$job_id' ";
                
    $query_run=mysqli_query($con,$query);
    if($query_run){
        if($image!=''){
        move_uploaded_file($_FILES['image']['tmp_name'],'uploads/logos/'.$filename);
        if(file_exists('uploads/logos/'.$old_logo)){
            unlink("uploads/logos/".$old_logo);
        }
        }
        
        
        $_SESSION['status']="Job Updated Successfully";
        header('Location:job-edit.php?job_id='.$job_id);
        exit(0);
    }
    else{
        $_SESSION['status']="Job Not Updated";
        header('Location:job-edit.php?job_id='.$job_id);
        exit(0);
    }

    
    
}




//job fetch


if(isset($_POST['job_save'])){
    $name=$_POST['name'];
    $about=$_POST['about'];
    $description=$_POST['description'];
    $website=$_POST['website'];
    $position=$_POST['position'];
    $date=date('Y-m-d', strtotime($_POST['dateon']));
    $batch=$_POST['batch'];
    $stream=$_POST['stream'];
    $location=$_POST['location'];
    $salary=$_POST['salary'];
    $jobtype=$_POST['jobtype'];
    $elink=$_POST['elink'];
    $joblink=$_POST['joblink'];
    $image=$_FILES['image']['name'];
    

    $allowed_extension=array('png','jpg','jpeg');
    $file_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$file_extension;
    if(!in_array($file_extension,$allowed_extension)){
        $_SESSION['status']="Only jpg, png, jpeg format is allowed";
        header('Location:job-add.php');
        exit(0);
    }
    else{
        $query="insert into jobs (name,about_comapny,jd,website,date,position,stream_required,batch,location,salary,job_type,employee_link,job_link,logo) values('$name','$about','$description','$website','$date','$position','$stream','$batch','$location','$salary','$jobtype','$elink','$joblink','$filename')";
        $query_run=mysqli_query($con,$query);
        if($query_run){
            move_uploaded_file($_FILES['image']['tmp_name'],'uploads/logos/'.$filename);
            $_SESSION['status']="Job Added Successfully";
            header('Location:job-add.php');
            exit(0);
        }
        else{
            $_SESSION['status']="Something went wrong!";
            header('Location:job-add.php');
            exit(0);
        }
    }
    
}


//job delete

if(isset($_POST['job_delete_btn'])){
    $job_id=$_POST['job_delete_id'];
    $query="delete from jobs where id='$job_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['status']="Job Deleted Successfully";
                header("location:jobs.php");
    }
    else{
        $_SESSION['status']="Deletion Failed";
        header("location:jobs.php");
    }
}








// logout
if(isset($_POST['logout_btn'])){
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status']="Logged Out Successfully";
    header("Location:login.php");
    exit(0);
}

//live email check
if(isset($_POST['check_Emailbtn'])){
    $email=$_POST['email'];
    $checkemail="select email from users where email='$email'";
    $checkemail_run=mysqli_query($con,$checkemail);
    if(mysqli_num_rows($checkemail_run)>0){
        echo "Email Already exist";
    }
    else{
        echo "It's Available";
    }

}



//insert 

if(isset($_POST['addUser'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    if($password== $confirmpassword){//password matching
        //email check exist or not
        $checkemail="select email from users where email='$email'";
        $checkemail_run=mysqli_query($con,$checkemail);
        if(mysqli_num_rows($checkemail_run)>0){
            $_SESSION['status']="Email Already exist!!";
            header("location:registered.php");
        }
        else{
            $user_query="insert into users (name,phone,email,password) values ('$name','$phone','$email','$password')";
            $user_query_run=mysqli_query($con,$user_query);
            if($user_query_run){
                $_SESSION['status']="User Added Successfully";
                header("location:registered.php");
            }
            else{
                $_SESSION['status']="User Registration Failed";
                header("location:registered.php");
            }
        }
        
    }
    else{
        $_SESSION['status']="Password and confirm password does not matched";
            header("location:registered.php");
    }

    
}

// update

if(isset($_POST['updateUser'])){

    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="update users set name='$name',phone='$phone',email='$email',password='$password' where id='$user_id'";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['status']="User Updated Successfully!";
        header("location:registered.php");
    }
    else{
        $_SESSION['status']="User Updating Failed!";
        header("location:registered.php");
    }
}


//delete

if(isset($_POST['DeleteUserbtn'])){

    $userid=$_POST['delete_id'];
    
    $query="delete from users where id='$userid'";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['status']="User Deleted Successfully!";
        header("location:registered.php");
    }
    else{
        $_SESSION['status']="User Deletion Failed!";
        header("location:registered.php");
    }
}

?>