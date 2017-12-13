<?php
include "one/connection.php";
include "one/functions.php";
if(isset($_POST['one_login2']))
{
			$posi = $_POST['posi'];	
			$name = $_POST['name'];	
			$gender = $_POST['gender'];	
			$email = $_POST['email'];	
			$mobile = $_POST['mobile'];	
			$joinpin = $_POST['joinpin'];//
			$pkge = getPinPkID($joinpin);//	
			$pknm = $pkge['PinPk'];
			$pknmid = $pkge['PinPkID'];
			$refidcode = $_POST['refidcode'];
			$getSup = getSup($refidcode);//
			$spname = $getSup['name'];
			$COustid = make_userid();
			$passw = make_Pass();
			$values_rcv = find_parent_binary($refidcode,$posi);
			$pos_found = $values_rcv['pos'];
			$parent = $values_rcv['parent'];
			$doj = date('Y-m-d');
			$exptod = date('Y-m-d', strtotime('+12 month', strtotime($doj)));
			
$detail = array();
$detail['spid'] = $refidcode;
$detail['spname'] = $spname;
$detail['getuid'] = $COustid;
$detail['pass'] = $passw;
$detail['name'] = $name;
$detail['mobile'] = $mobile;
$detail['email'] = $email;
			
			$query_insert = mysql_query("INSERT INTO reg(regid, userid, password, name, gender, email, mobile, sponsid, sponsname, epin, doj, exdt, pack, toj, regdoj) VALUES (NULL, '$COustid', '$passw', '$name', '$gender', '$email', '$mobile', '$refidcode', '$spname', '$pknmid', '$doj', '$exptod', '$pknm', CURTIME(),Now())");
			

if($pknm == "Free")
{
	$query_insert_tree = mysql_query("INSERT INTO mytree VALUES (NULL,'$COustid','','','$posi','$parent','$refidcode','0')");
}
else
{
	$query_insert_tree = mysql_query("INSERT INTO mytree VALUES (NULL,'$COustid','','','$posi','$parent','$refidcode','1')");
}
if($posi == "Left"){
$query_update = mysql_query("Update  mytree set  left1 =  '$COustid' where uname = '$parent'");
}
elseif($posi == "Right"){
$query_update = mysql_query("Update  mytree set  right1 =  '$COustid' where uname = '$parent'");
}
$query_update_pins = mysql_query("Update pins set status = 'Used', usedby = '$COustid' where pinid='$pknmid' and epin='$joinpin'");
}
if($query_insert && $query_insert_tree && $query_update && $query_update_pins)
{
	SendSMS($detail);
	SendMail($detail);
	$done = true;
}
else{$done =  false;}

if($done == true)
{
echo "<script>
				alert('Successful Registration Please Check Your Email ');
				window.location.href='index.php';
				</script>";	
}
else
{
echo "<script>
				alert('Error In New Registration Please Try Again');
				window.location.href='index.php';
				</script>";	

}
?>
