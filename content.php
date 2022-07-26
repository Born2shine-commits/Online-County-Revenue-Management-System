<?php
require_once('auth.php');
$username=$_SESSION['SESS_MEMBER_ID_'];
$usercat=$_SESSION['SESS_CATEGORY_'];
include 'includes/functions.php';
require_once("include/dbcon.php"); 

$func = new Functions();
$activity = "View ". $usercat."*s Dashboard";
$func->addAuditTrail($activity,$username);

include 'include/DAO.php';
$dao = new DAO();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>County Revenue Management System</title>
<link href="css/style_blue.css" type="text/css" rel="stylesheet">
<link href="css/pages_layout.css" type="text/css" rel="stylesheet">
<link href='css/opa-icons.css' rel='stylesheet'>
<style type="text/css">
html {
border: 1px solid #FFFF00; 
	}
body{
margin:0;
padding:0;
}
</style>

</head>
<body>
<div id="display_Area">
  <table class="borders" cellpadding="5" cellspacing="0">
   
    <tr>
      <td>
        <div class="sortable row-fluid">
          <?php

	
 if($usercat=='Administrator' || $usercat=='Clerk'){
  //<fieldset>
  ?>
          <a data-rel="tooltip" href="home.php" target="main"> 
          <div>&nbsp;</div>
          <div>Library</div>
          </a>
          <?php
	 // </fieldset>
	 }
	 // <fieldset>
	 ?>
          <?php
	 
	   if($usercat=='Clerk'){
	   ?>
	   <a data-rel="tooltip"  class="well span3 top-block" href="students.php">
          <div>&nbsp;</div>
          <div>Make Payments</div>
          <a data-rel="tooltip" title="Quick link to Database Archive" class="well span3 top-block"  href="small_business.php" target="main">
             <a data-rel="tooltip" title="Quick link to Database Archive" class="well span3 top-block"  href="large_business.php" target="main">
          
           <a data-rel="tooltip" title="Quick link to Database Archive" class="well span3 top-block"  href="market.php" target="main">
       
          </a>
          <?php
	 }
	  //</fieldset>
	 ?>
        
		
		  </div>
       
</div>
          </div>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
