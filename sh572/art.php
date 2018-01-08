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
			position:floating;
			align: center;
			overflow:auto;
		}
		.xyz{
			margin-top:10px;
			margin-left:200px;
			color:back;
			
		}
		.topnav{
			 list-style-type: none;
			margin-left:200px;
			height:10%;
			width:100%
			background-color: #f1f1f1;
			overflow:hidden;
			color: #FFF;
			margin-left:150px;
		}
		.topnav a{
			color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
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
 a.active {
    background-color: #4CAF50;
    color: white;
}

 a:hover:not(.active) {
    background-color: #555;
    color: white;
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
	  <div class="xyz">
	  <?php
	  $query = "Select * from art;";
	  $res = $db->query($query);
	  while($result = mysqli_fetch_array($res)){
		  echo'<a href="#"><img  style="margin-left:50px; margin-top:10px;" src="data:image/jpeg;base64,'.base64_encode($result['image']).'" height="500px" width="300px"/></a>';
	  }
	  ?>
	  </div></div>
</body>
</html>