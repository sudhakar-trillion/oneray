
<?php
error_reporting(0);
ob_start();
session_start();

include "one/connection.php";

?>
<?php
$msg="";
if(isset($_POST['one_login']))
{
    $userid=strtolower($_POST['loginid']);
    $password=$_POST['passwrd'];
	
	
	$queryid = mysql_query("SELECT * FROM reg");
		while($row = mysql_fetch_array($queryid))
		{
			$fuid = $row['userid'];
			$fuide = $row['email'];
			$fpass=$row['password'];
			if(($userid==$fuid && $password==$fpass ) || ($userid==$fuide && $password==$fpass ))
			{
					$_SESSION['client']=$fuid;
					header('location:one/index.php');
			}
			else
			{
				$msg = "Wrong username and Password";
			}
			
		}
	
}


$msg="";
if(isset($_GET['submit']))
{
    $userid=strtolower($_GET['aduid']);
    $password=$_GET['adpass'];
	
	
	$queryid = mysql_query("SELECT * FROM reg");
		while($row = mysql_fetch_array($queryid))
		{
			$fuid = $row['userid'];
			$fuide = $row['email'];
			$fpass=$row['password'];
			if(($userid==$fuid && $password==$fpass ) || ($userid==$fuide && $password==$fpass ))
			{
					$_SESSION['client']=$fuid;
					header('location:one/index.php');
			}
			else
			{
				$msg = "Wrong username and Password";
			}
			
		}
	
}
?> 
<?php include('header.php');?>
<?php include('menu.php'); ?>
	
    <!-- end hero area -->
	<!-- Start body content -->
    <div class="main" role="main">
    	<div id="content" class="content full padding-tb20">
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-md-2">
                        <div class="spacer-45"></div>
                        <!-- start contact us -->
                        
                        <!-- end contact us -->
                    </div>
                    <div class="col-md-8">
                    	<div class="contact-form-wrapper">
                        	<h3>Secure Login</h3>
                            <p class="margin-35" style="color:#F00;"><?php if($msg !=""){ echo $msg;} ?></p>
    <form runat="server" method="POST">
        <label for="name">Customer ID / E-mail ID*</label>
        <input type="text" name="loginid" class="form-control" placeholder="Customer ID / E-mail ID">
        <label for="email">Passowrd*</label>
        <input type="password" name="passwrd" class="form-control" placeholder="Passowrd"> 
        <input type="submit" name="one_login" class="button btn-info" value="Secure Login">
    </form>
    <p align="right" style="margin-top:-7%;"><a href="resetpass.php" style="color:#F00;">Forgot your password. ?</a></p>
                            <div class="clearfix"></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div class="spacer-60"></div>
        </div>
    </div>
    <!-- end body content -->
    <!-- start footer -->
<?php include('footer.php'); ?>    
    <!-- end footer -->
<?php include('foot_script.php'); ?>    
