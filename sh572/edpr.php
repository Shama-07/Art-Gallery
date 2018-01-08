<html lang="en">
<head>
<style type="text/css">
body{
	background-color:#ffffff;
	color: #000000;
}
input[type=text], input[type=number], input[type=date] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.submit {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


</style>
</head>
<body>
<h1> Edit Ur Profile </h1>
<h3 style="float:right; margin-right:50px;"> <a href="pro.php" > BACK </a></h3>
    <form action="edpr.php" method="post" enctype="multipart/form-data">
		<br><input type="date" placeholder="Enter Date of birth" name="dob" id="dob"></br>
		<br><input type="text" placeholder="Enter Address" name="add" id="add"></br>
		<br><input type="text" placeholder="Enter Specialization" name="spc" id="spc"></br>
		<br><input type="text" placeholder="Enter State" name="stc" id="stc"></br>
        <br><input type="submit" class="submit" name="submit" value="EDIT"/></br>
    </form>

<?php
include("session.php");
if(isset($_POST["submit"])){
		$dob = $_POST['dob'];
		$addr = $_POST['add'];
		$spc = $_POST['spc'];
		$stc = $_POST['stc'];
        if($addr){
			 $up1 = $db->query("update artist set address='".$addr."' where artist.Name=\"$login_session\"");
		}
		if($spc){
			 $up2 = $db->query("update artist set specialization='".$spc."' where artist.Name=\"$login_session\"");
		}
		if($stc){
			 $up2 = $db->query("update artist set state='".$stc."' where artist.Name=\"$login_session\"");
		}
		if($dob){
        $update = $db->query("update artist set dob='".$dob."', age=(SELECT get_age(\"$dob\", NOW()) AS age) where artist.Name=\"$login_session\"");
		}
}

?>
</body>
</html>
