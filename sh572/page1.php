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
.section{
	margin-left:250px;
}
#cv {
    margin-top:50px;
}
.col6{
	width:80%;
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
	    <div id="resume" class="section">
        <table id="cv">
		<?php
		$date = date('Y-m-d');
		$qry = "Select * from events where state IN (Select state from artist where artist.Name=\"$login_session\")";
		$rest= $db->query($qry);
		while($rst = mysqli_fetch_array($rest)){?>
          <tbody>
            <tr>
              <td class="col2"><div class="date"><?php echo $rst['date'];?></div>
                <p class="title"><?php echo $rst['place'];?></p></td>
              <td class="col6 pl-30">
			  <p class="company"><?php echo $rst['galleryn'];?></p>
                <p class="description"><?php echo $rst['about'];?></p>
              </td>
            </tr>
            <tr>
            </tbody>
		<?php } ?>
        </table>
      </div>
	 </div>
	  </body>
</html>   

