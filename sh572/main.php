<?php
   include("connect.php");
   session_start();
   $error= 'press enter to login';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT uid FROM websiteusers WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
<script type="text/javascript">
<!-->
var image1=new Image()
image1.src="https://phreakuency.files.wordpress.com/2012/09/2012-01-02_00002.jpg"
var image2=new Image()
image2.src="https://images1.miaminewtimes.com/imager/2014s-best-street-art-in-wynwood/u/original/6513480/wynwoodstreetart_basel2014_103.jpg"
var image3=new Image()
image3.src="https://d3ui957tjb5bqd.cloudfront.net/uploads/2015/01/drwho-8.jpg"
//-->
</script>
<style type="text/css">
 body{
  margin:0;
  padding:header-<length> 0 footer-<length> 0;
 
 }
 div#header{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:80px;
  height:header-<length>;
  background-color:#FFE4C4;
  text-align:center;
 }
 div#footer{
  position:absolute;
  bottom:0;
  left:0;
  width:100%;
  height:footer-<length>;
  background-color:#FFE4C4;
  height: 50px;
 }
 @media screen{
  body>div#header{
   position:fixed;
   font-family: "Times New Roman", Georgia, Serif;
   font-size:250%;
   font-style:bold;
  }
  body>div#footer{
   position:fixed;
  }
 }
 * html body{
  overflow:hidden;
 } 
 * html div#content{
  height:100%;
  overflow:auto;
 }
 .container {
      width:100%;
    }
    .left {
      width:65%;
      float:left;
	  
    }
    .right {
      width:35%;
      float:right;
    }
#formf{
padding-top:50px;
padding-right:100px;
}
label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
			background-color:#FFFFFF;
			color:#000000;
         }
		 a{
		  text-align:center;
		  padding:50px;
		  border-radius:10px;
		   font-weight: bold;
	  }
	  #footer {
  color:#999;
  text-align:center;
  width:100%;
  padding-top:20px;
  margin-top:-2px;
}
	  
	 a{
			color: #060050;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
		}
 a:hover {
    background-color: #ddd;
    color: blue;
}
 a.active {
    background-color: #4CAF50;
    color: black;
}
 
</style>
<div id="header">ART SNAP<p style="color:#000000; font-size:15px; font-style:italic;" > A Platform To Share Your Art ,And get to see artist around you
</p></div>
<div id="footer">
<p> @Designed by Shama M</p>
</div> 
</head>
<body>
<div class="container" id="content">
<div class="left">
 <img src="boxingring.png" name="slide"  id="img" width="750" height="600">
<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
//-->
</script>
</div>
<div class="right">
<p style="color:#000000; font-size:25px; font-style:italic; margin-top:100px;"> ART SNAP is a creative hub offering adults, children and teenagers 
the opportunity to engage in their own artistic adventure 
in a welcoming, inclusive and supportive space.</p>
<a href="cgal.php">Gallery</a>
<a href="event.php"> Upcoming Events </a>
 <div id="formf" align = "center">
         <div style = "width:400px; border: solid 1px #333333;background-color:#FFFFFF; color:#FFFFFF; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px;background-color:#FFFFFF; color:#000000;">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error;?></div>
					
            </div>
				
         </div>
			
      </div>
     <p> Wanna Be A Part Of Artistic WOrld <a href="http://localhost/sh572/signup.html">REGISTER HERE</a></p>
</div>
</div>
</body>
</html>
