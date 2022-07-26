<script>

   function validateAlpha(){
            var textInput = document.getElementById("fname").value;
            var textInput1 = document.getElementById("bname").value;
       

            textInput = textInput.replace(/[^A-Za-z]/g, "");
             textInput1 = textInput1.replace(/[^A-Za-z]/g, "");
        

            document.getElementById("fname").value = textInput;
            document.getElementById("bname").value = textInput1;
       
           }
        //function to validate numeric numbers.
        function isNumberKey(){
                    var textInput = document.getElementById("adm").value;
                    var textInput1 = document.getElementById("yob").value;
                     var textInput2 = document.getElementById("schoolCode").value;
                     var textInput3 = document.getElementById("kmarks").value;
                    //schoolCode
                   
                    
                    textInput = textInput.replace(/[^0-9 0-9]/g, "");
                    textInput1 = textInput1.replace(/[^0-9 0-9]/g, "");
                   textInput2 = textInput2.replace(/[^0-9 0-9]/g, "");
                   textInput3 = textInput3.replace(/[^0-9 0-9]/g, "");
                    
                    document.getElementById("adm").value = textInput;
                    document.getElementById("yob").value = textInput1;
                    document.getElementById("schoolCode").value = textInput2;
                      document.getElementById("kmarks").value = textInput3;
                   
            }

</script>



<?php include ('header1.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Admin / Clerk Profile /</small> Add Clerk
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plus"></i> Add Clerk</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">First Name <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" id="fname" name="firstname"  required="required" class="form-control col-md-7 col-xs-12" onKeyup="validateAlpha();">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Middle Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="middlename" placeholder="MI / Middle Name....." id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="lastname" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">User Name <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="username" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Password <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" name="password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Confirm Password <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" name="confirm_password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                        <!---        <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Admin Type <span class="required">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="admin_type" class="select2_single form-control" required="required" tabindex="-1" >
											<option>Admin</option>
											<option>Encoder</option>
                                        </select>
                                    </div>
                                </div>	-->
                               
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="clerk1.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
							
							<?php	
							include ('include/dbcon.php');
						if (isset($_POST['submit'])){
									$firstname = $_POST['firstname'];
									$middlename = $_POST['middlename'];
									$lastname = $_POST['lastname'];
									$username = $_POST['username'];
									$password = $_POST['password'];
									$confirm_password = $_POST['confirm_password'];
							//		$admin_type = $_POST['admin_type'];
					
					$result=mysqli_query($conn,"select * from clerk WHERE id='$id' ") or die (mysqli_error($conn));
					$row=mysqli_num_rows($result);
					if ($row > 0)
					{
					echo "<script>alert('Username already taken!'); window.location='add_clerk.php'</script>";
					}
					elseif($password != $confirm_password)
					{
					echo "<script>alert('Password do not match!'); window.location='add_clerk.php'</script>";
					}else
					{		
						$query=mysqli_query($conn,"insert into clerk (firstname, middlename, lastname, username, password, confirm_password)
						values ('$firstname', '$middlename', '$lastname', '$username', '$password', '$confirm_password')")or die(mysqli_error($conn));
						if($query>0)
						{
						echo "<script>alert('Account successfully added!'); window.location='clerk1.php'</script>";
					    }
						else
						{
							echo "<script>alert('Account clerk not added!'); window.location='clerk1.php'</script>";
						}
									
									}
							 }
								?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>