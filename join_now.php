<?php 
		if(!isset($_POST['one_login']))
{
	header("Location:register.php");
	
}

else{$refidC = $_POST['spid']; $Jpin = $_POST['epin'];}
?> 
<?php include('header.php');?>
<?php include('menu.php'); ?>

<div class="main" role="main">
    	<div id="content" class="content full padding-tb20">
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-md-2">
                    	<div style="height:250px;"></div>
                        <div class="spacer-45"></div>
                        <!-- start contact us -->
<script type="text/javascript">
function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	// Added to allow decimal, period, or delete
	if (charCode == 110 || charCode == 190 || charCode == 46) 
		return true;
	
	if (charCode > 31 && (charCode < 48 || charCode > 57)) 
		return false;
	
	return true;
} 
</script>
                        <!-- end contact us -->
                    </div>
                    <div class="col-md-8">
                    	<div class="contact-form-wrapper">
                        	<h3>Register</h3>
                            <p class="margin-35" style="color:#F00;"><?php ?></p>
    <form method="post" action="join_now2.php">
    	<label>Position*</label>
        <select class="form-control" required name="posi">
                    <option value="Left">Left</option>
                    <option value="Right">Right</option>                    
                </select>
        <label>Full Name*</label>
        <input type="hidden" name="refidcode" value="<?php echo $refidC; ?>">
        <input type="hidden" name="joinpin" value="<?php echo $Jpin; ?>">
        <input type="text" name="name" required class="form-control" placeholder="Full Name">
        <label>Gender*</label>
        <select class="form-control" required name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>                    
                </select>
        <label>email*</label>
        <input type="email" name="email" class="form-control" required >
        <label>mobile*</label>
        <input type="text" class="form-control"name="mobile" id="mobile" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="e.g: 9876543210" required>
        <input name="one_login2" type="submit" class="button btn-info" value="Submit">
        
    </form>
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