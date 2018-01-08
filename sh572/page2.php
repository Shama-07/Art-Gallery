<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Art Gallery</title>
	    <style type = "text/css">
		body{
			background-image:url("back.jpg");
		}
		.box{
			width:100%;
			height:90%;
			background-color:white;
			align: center;
		overflow:auto;
		}
		.topnav{
			 list-style-type: none;
			margin-left:200px;
			height:10%;
			width:100%
			background-color: #f1f1f1;
			overflow:hidden;
			color: #FFF;
		}
		.topnav a{
			color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 30px;
		}
		.topnav a:hover {
    background-color: #ddd;
    color: blue;
}
.topnav a.active {
    background-color: #4CAF50;
    color: black;
}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: #f1f1f1;
    position: fixed;
    height: 90%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
	margin-top:50px;
}
 li a.active {
    background-color: #4CAF50;
    color: white;
}

 li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
#fro{
	margin-left:300px;
}
input[type=text], input[type=date], input[type=file],textarea {
    width: 60%;
    padding: 10px 15px;
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
	  <h1 style="color:white;"><?php echo $login_session ?> </h1>
	  <div class="box">
	  <div class="nav">
	  <ul>
	  <li><a href="home.php"> HOME </a></li>
	  <li><a href="gallery.php"> MY Gallery </a></li>
	  <li><a href="pro.php"> Profile </a></li>
	  <li><a href="logout.php"> Sign Out</a></li>
	  </ul>
	  </div>
	 <div class="topnav">
	  <a style="margin-left:50px;" href="artist.php"> Artist </a>
	  <a style="margin-left:50px;" href="art.php">Art<a>
	  <a style="margin-left:50px;" href="types.php">Diff Types<a>
	  <a style="margin-left:50px;" href="page1.php"> Events around me </a>
	  <a style="margin-left:50px;" href="page2.php"> Host an event </a>
	  </div>
	 <div id="fro">
<form action="page2.php" method="post" enctype="multipart/form-data">
		<p> Select image to upload:</p>
        <br><input type="file" name="image"/></br>
		<br><input type="text" placeholder="Enter Title" name="title" id="title" required></br>
		<br><input type="date" placeholder="Enter date" name="date" id="date" required></br>
		<br>
		<textarea  cols="60" rows="10" placeholder="Enter description" name="desc" id="desc" required="required"></textarea></br>
		<br><input type="text" placeholder="Enter place" name="place" id="place"></br>
		<br><input type="text" placeholder="Enter State" name="state" id="state" required></br>
        <br><input type="submit" id ="submit" class="submit" name="submit" value="submit"/></br>
    </form>
	</div>
	  </div>
	  <?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $title = $_POST['title'];
		$state = $_POST['state'];
		$gname = $_POST['place'];
		$desc = $_POST['desc'];
		$date = $_POST['date'];
        $insert = $db->query("INSERT into events(`galleryn`,`date`,`about`,`host`,`place`,`images`,`state`) VALUES ('".$title."','".$date."','".mysql_real_escape_string($desc)."','".$login_session."','".$gname."','".$imgContent."','".$state."');");
        if($insert){
            echo "Event uploaded successfully.";
        }else{
            echo "Event upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
	  </body>
</html>   
