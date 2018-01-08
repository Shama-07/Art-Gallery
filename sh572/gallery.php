  <html>
  <head>
  <style type="text/css">
  body{
  background-image:url("back.jpg");
  }
  .bck{
	  width:100%;
	  height:90%;
	  background-color:white;
  }
  </style>
  </head>
  <body>
  <div  class="first">
  <h1 style="color:white";> My Gallery<h1>
  <a  style="float:right;" href="upload.php" >  Upload </a>
  </div>
  <div class="bck">
  <?php
 include('session.php');
 
 $query = "select * from art where art.aname = \"$login_session\"";
 $res= $db->query($query);
 
 while($result = mysqli_fetch_array($res)){


echo'<a href="#"><img  style="margin-left:50px; margin-top:10px;" src="data:image/jpeg;base64,'.base64_encode($result['image']).'" height="500px" width="300px"/></a>';
 }
 
 ?>
 </div>
 </body>
 </html>