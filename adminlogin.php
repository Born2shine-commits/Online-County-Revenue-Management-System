<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>County Revenue Management System</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

<style>
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:white;
 font-size:16px;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>
</head>

<body style="background:#0000FF;">
                        
    
    <div class="">
	<!-- <center><h1><font color="blue"><font size="30px;"><u>Administrator Login Panel</u></font></font></h1></center>
      -->    <!-- <h1><i class="fa fa-university" style="font-size: 26px;"></i> County Revenue Management System</h1> -->
		 <br />
		 <br />
		 <br />
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
				
				
                    <form action="" method="post">
                        <h1>Administrator Login Panel</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus='autofocus' required="required" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required"/>
                        </div>
                        <div>
								<button class="btn btn-primary submit" type="submit" name="login"></i> Log in</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
						
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-university" style="font-size: 26px;"></i> County Revenue Management System</h1>

                                <p>© <?php echo date('Y'); ?> <i class="fa fa-book"></i>Abuyawycliffe</p>
                            </div>
                        </div>
                    </form>
<?php
include('include/dbcon.php');

if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);

if ($count > 0){
session_start();
$_SESSION['id']=$row['id'];
?>
<script>
window.alert("Sucessfull login");
window.location="home1.php";
</script>
<?php
}
else
{ echo "<script>alert('wrong username or password!');</script>"?>

<?php
}
}
?>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>