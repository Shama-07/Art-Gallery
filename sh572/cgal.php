  <html>
  <head>
  <style type="text/css">
  .bck{
	  background-color:black;
  }
 p{
	 color:white;
 }
  </style>
  </head>
  <body>
  <div  class="first">
  <h1 style="color:black; font-size:40px; font-style:underline; text-align:center;"> Gallery<h1>
  <h2 style="float:right; margin-right:100px"> <a href="main.php">Back</a></h2>
  </div>
  <div class="bck">
  <table>
  <?php
 include('connect.php');
 
 $query = "select * from art";
 $res= $db->query($query);
 while($result = mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo'<a href="#"><img  style="margin-left:50px; margin-top:10px;" src="data:image/jpeg;base64,'.base64_encode($result['image']).'" height="auto" width="300px"/></a>';?></td>
<td style="padding:50px;"><br><p> TITLE: <?php echo $result['title'];?></p></br>
				<br><p> COST: <?php echo $result['cost'];?>/-</p></br>
				<br><p> ARTIST:<?php echo $result['aname'];?></br></p>
				<br><p> To BUY Email at <?php
				$at = $result['aname'];
				$qry = "select email from websiteusers where websiteusers.fullname=\"$at\"";
				$r = $db -> query($qry);
				while($rst = mysqli_fetch_array($r)){
						 echo $rst['email'];?></p></br>
				<?php 
				}; ?></td>
              </tr>

 <?php
 }
 ?>
 </table>
 </div>
 </body>
 </html>