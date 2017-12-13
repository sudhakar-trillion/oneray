 
<?php include('header.php');?>
<?php include('menu.php'); ?>
<?php 
@$Rpin = $_GET['pin'];
?>
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

function chckuid()
{
	//alert()
	$.post("one/check_uid.php",{	
		uid:uid_inp.value
		},function(output){
			output = $.trim(output);			
			if(output === "Wrong")
				{
					//alert(output)
					$("input:text#uid_inp").val("").show();	
					$("#display_uid").html(' <img src="cross-circle.png"> Invalid Referral Code').show();
				}			
			else 
				{
					
					$("#display_uid").html(output).show();
				}
			});
			/*{
			*/
}
function chckpin()
{
	//alert()
	$.post("one/check_pin.php",{	
		pinn:uid_pin.value
		},function(output){
			output1 = $.trim(output);			
			if(output1 === "Wrong Pin")
				{
					//alert(output)
					$("input:text#uid_pin").val("").show();	
					$("#display_pin").html(' <img src="cross-circle.png"> Invalid Pin').show();
				}			
			else 
				{
					
					$("#display_pin").html(output).show();
				}
			});
			/*{
			*/
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
    <form method="post" action="join_now.php">
        <label for="name">Referral Code*</label>&nbsp;&nbsp;<span id="display_uid"></span>
        <input type="text" name="spid" id="uid_inp" onkeypress="return AvoidSpace(event)" onBlur="chckuid();" required class="form-control" placeholder="Referral Code">
        <label for="email">E-Pin*</label>&nbsp;&nbsp;<span id="display_pin"></span>
        <input type="text" name="epin" value="<?php if($Rpin !=''){echo $Rpin;} ?>" id="uid_pin" onkeypress="return AvoidSpace(event)" onBlur="chckpin();" required class="form-control" placeholder="E-Pin">        
        <input name="one_login" type="submit" class="button btn-info" value="Next">
        
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