<h2>Login Area </h2>



<table width="100%" border="0">
  <tr>
    <td align="center">
    <form class="center" runat="server" method="POST">
    <table style="line-height:35px; box-shadow:3px 3px 19px 3px #CCCCCC; border:solid 2px #339900	; " class="table-responsive" width="50%" border="0" cellpadding="5" cellspacing="0">
      <tr>
        <td width="42%" height="50" colspan="3" bgcolor="#339900"><h2 align="center" style="color:#fff;">Login Area</h2></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#E1FFD2"><strong>USER NAME&nbsp;<span>:</span>&nbsp;</strong></td>
        <td align="left" bgcolor="#E1FFD2"><input type="text" name="login" placeholder="Username" required style="width:100%" id="username" onFocus="visible1();"></td>
        <td align="left" bgcolor="#E1FFD2">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#E1FFD2"><strong>PASSWORD&nbsp;<span>:</span>&nbsp;</strong></td>
        <td align="left" bgcolor="#E1FFD2"><input type="password" name="pass" placeholder="Password" required style="width:100%" id="password" onFocus="visible1();"></td>
        <td align="left" bgcolor="#E1FFD2">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3"><label for="password" id="msgup" class="control-label fa-label" style="color:#F00; display:none;">USERNAME AND PASSWORD ARE WRONG</label></td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
      </tr>
      <tr>
      
      
      
      <tr>
      <td></td>
      <td align="left"><div style="display:none;" id="prgimage"><img src="images/progressbar.gif"></div></td>
      <td align="left"></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#E1FFD2">&nbsp;</td>
        <td align="left" bgcolor="#E1FFD2"><input class="btn btn-success btn-large btn-block" type="button" name="submit1" id="submit1" value="Login" />
        
        
        
        </td>
        <td align="left" bgcolor="#E1FFD2">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
        <td align="left" bgcolor="#F3F3F3">&nbsp;</td>
      </tr>
      </table>
    </form>
    </td>
  </tr>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>      
<script>
function visible1()
{
   $("#submit1").css("visibility","visible");
}
$("#submit1").click(function(){
	
	$(this).css("visibility","hidden");

	//$('#forgotpw').css("visibility","hidden");

	//$('#registraion').css("visibility","hidden");

	$("#prgimage").css("display","block");

	var username=$("#username").val();

	var password=$("#password").val();

		$.ajax({

			  url:'panel/checklogin.php',

			  data:{'username':username,'password':password},

			  type:'POST',

			   success:function(result)

			 	{

					if(result=='no')

					{

						$("#msgup").css("display","block");

						$("#prgimage").css("display","none");

						$("#submitl").css("visibility","visible");

						//$('#forgotpw').css("visibility","visible");

						//$('#registraion').css("visibility","visible");

						

					}

					else

					{

						//alert();

						$("#msgup").css("display","none");

						$("#submitl").css("visibility","hidden");

						$("#prgimage").css("display","block");

						window.location="panel/Member/dashboard.php";

					}

				}

		});

	});
$("#password").keyup(function(e){

			var key = e.which;

			//alert(key);

			if(key == 13)  // the enter key code

  			{

				$("#submitl").click();

			}

		});
</script>