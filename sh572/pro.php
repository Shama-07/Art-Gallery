<?php
include('session.php');
?>
<html>
<body>
<style>
body{
	background-image:url('back.jpg');
	color: white;
}
.box{
	background-color: #00aba9;
	width: 80%;
	height: 80%;
	margin-top:100px;
	overflow:auto;
	margin-left:200px;
}
.col{
	padding-top: 50px;
	padding-left:100px;
	align:center;
	width: 80%;
}

#bioinfo {
	margin-top:70px;
  width:60%;
  border-collapse: collapse;
  margin-left:100px;
}
#bioinfo tr td {
  padding:10px 80px;
}

#bioinfo .odd {
  background: rgba(0,0,0,0.5);
  border-right:1px solid #00aba9;
  border-bottom:1px solid #00aba9;
}

#bioinfo .even {
  background: rgba(0,0,0,0.3);
  border-bottom:1px solid #00aba9;
}
.col5 {
    width:40%;
}
.pl-50 {
  padding-left:250px;
  padding-top:10px;
}
.hd{
	padding-left:100px;
}
</style>
<header>
       <h1 style="color:white; font-size:40px; text-align:center;"><?php echo $login_session ?> </h1>
      <h2 style="color:white;text-align:center;">Creativity Takes Courage</h2>
	 	 </header>
<div id="box" class="box">
        <div class="col">
		 <h4 style="float:right; margin-right:100px;"> <a href="home.php">HOME</a></h4>
		<h1 class="hd"> PROFILE </h1>
          <table id="bioinfo">
		  <?php
	$query = "select * from artist where artist.Name = \"$login_session\"";
 $res= $db->query($query);
 
 while($result = mysqli_fetch_array($res)){
	?>
            <tbody>
              <tr>
                <td class="odd">Name</td>
                <td class="even"><?php echo $login_session ;?>  </td>
              </tr>
              <tr>
                <td class="odd">Date of birth</td>
                <td class="even"><?php echo $result['dob'];?></td>
              </tr>
              <tr>
                <td class="odd">Address</td>
                <td class="even"><?php echo $result['address'];?></td>
              </tr>
              <tr>
                <td class="odd">Specialization</td>
                <td class="even"><?php echo $result['specialization'];?></td>
              </tr>
              <tr>
                <td class="odd">Age</td>
                <td class="even"><?php echo $result['age'];?></td>
              </tr>
            </tbody>
          </table>
 <?php }; ?>
        </div>
		<div class="column col5 pl-50">
		<h2><a href="edpr.php" > EDIT UR PROFILE </a></h2>
		</div>
        </div>
</body>
</html>
