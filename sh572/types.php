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
		.xyz{
			margin-top:10px;
			margin-left:250px;
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
li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
.side{
	margin-left:250px;
			height:auto;
			background-color:ivory;
			overflow:auto;
           
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
	  <a style="margin-left:50px;" href="#"> Host an event </a>
	  </div>
	  <div class="xyz">
	  <?php
	  $query = "Select * from gtype;";
	  $res = $db->query($query);
	  while($result = mysqli_fetch_array($res)){
		  echo "<br>".$result['gname']."</br>";
	  }
	  ?>
	  </div>
	    <div class="side">
	  <form action=" " method="post" enctype="multipart/form-data" style="padding-top:50px">
	  <input type="text" placeholder="Search an image wrt to type" name = "atr" id="atr"/>
	  <input type = "submit" class="submit" name="submit" id="submit" value = "submit"/>
	  </form>
	  <table>
	  <?php
	  if(isset($_POST['submit'])){
        $name = $_POST['atr'];
		echo $name;
		$qry = "select * from art where art.gname=\"$name\"";
 $res= $db->query($qry);
		while($resu = mysqli_fetch_array($res)){
	?>
            <tbody>
              <tr>
                <td class="even"><?php echo'<a href="#"><img  style="margin-left:50px; margin-top:10px;" src="data:image/jpeg;base64,'.base64_encode($resu['image']).'" height="500px" width="300px"/></a>'?></td>
                <td style="padding:100px;"><br><p> TITLE: <?php echo $resu['title'];?></p></br>
				<br><p> COST: <?php echo $resu['cost'];?>/-</p></br>
				<br><p> ARTIST:<?php echo $resu['aname'];?></br></p></td>
              </tr>
            </tbody>
 <?php }; ?>
        </table>
	  <?php }; ?>
	  </div>
	  </div>
</body>
</html>