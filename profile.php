<?php
include('session.php');
?>
<html>
<head>
<style type="text/css">
*{
  border:0;
  font:inherit;
  font-size:100%;
  vertical-align:baseline;
  margin:0;
  padding:0;
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  font:16px 'PT Sans Narrow', Helvetica, Arial, sans-serif;
  font-weight:400;
  background-color:#ffffff;
  color:#ffffff;
    background-image:url("back.jpg");
}

ol,ul {
  list-style:none;
  list-style-image:none;
  list-style-position:outside;
  list-style-type:none;
}

img {
  border:none;
  max-width:100%;
}

a img {
  border:none;
}

a {
  color:#ffffff;
  text-decoration:underline;
  outline:none;
}

a:hover,a:focus {
  color:#333333;
  text-decoration:underline;
}

p {
  margin:0 0 10px;
}

header h1 {
  margin:30px 0 0;
}

header h1 a {
  font-size:30px;
  text-transform:uppercase;
  color:#333333;
  text-decoration:none;
}

header h1 a:hover {
  color:#00aba9;
  text-decoration:none;
}

header h2 {
  color:#333;
  font-size:22px;
  margin:10px 0 0;
}

h3 {
  font-size:26px;
  font-weight:400;
  margin:0 0 20px;
}

/* 8 Column Grid 
----------------------------------------------------------------------------- 

Span 1:    9.875%
Span 2:    22.75%
Span 3:    35.625%
Span 4:    48.5%
Span 5:    61.375%
Span 6:    74.25%
Span 7:    87.125%
Span 8:    100%

----------------------------------------------------------------------------- */

.column {
  margin-left:3%;
  padding:0 0%;
  float:left;
}

.column:first-child {
    margin-left:0;
}

.col1 {
    width:9.875%;
}
.col2 {
    width:22.75%;
}
.col3 {
    width:35.625%;
}
.col4 {
    width:48.5%;
}
.col5 {
    width:61.375%;
}
.col6 {
    width:74.25%;
}
.col7 {
    width:87.125%;
}
.col8 {
    margin-left:0;
    width:100%;
}

.pl-50 {
  padding-left:250px;
  padding-top:100px;
}

.pl-30 {
  padding-left:30px;
}

#mainwrap {
  overflow:hidden;
  position:relative;
  width:840px;
  margin:0 auto;
}

#content {
  height:400px;
  overflow:hidden;
  position:relative;
}

#pagecontainer {
  position:relative;
  width:9999px;
}

.section {
  float:left;
  height:400px;
  margin-right:50px;
  position:relative;
  width:100%;
  padding:30px;
  overflow:hidden;
}

#profile {
  background-color: #00aba9;
  overflow-y:scroll;
}

#resume {
  background-color: #76608a;
  overflow-y:scroll;
}

#contact {
  background-color: #f0a30a;
}

#menu {
  margin-top:30px;
  overflow:hidden;
}

#menu li {
  display:block;
  float:left;
  width:48.999%;
  margin-left:1%;
  position:relative;
}

#menu li:first-child {
  margin-left:0;
}

#menu li a {
  display:block;
  height:42px;
  line-height:42px;
  color:#333;
  font-size:18px;
  text-align:center;
  text-decoration:none;
  text-transform:uppercase;
  margin-top:20px;
  background-color:#e6e6e6;
}

#menu li span {
  display:none;
}

#menu li.active span {
  display:block;
  position:absolute;
  bottom:2px;
  width:100%;
  text-align:center;
  line-height:14px;
}

#menu li.active a {
  line-height:43px;
  height:62px;
  margin-top:0;
  color:#ffffff;
}

#menu li.active a.profile {
  background-color:#00aba9;
}

#menu li.active a.resume {
  background-color:#76608a;
}


#menu li a:hover {
  text-decoration:none;
  background-image:none;
}

#menu li.active a {
  text-decoration:none;
}

#bioinfo {
  width:100%;
  border-collapse: collapse;
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

.social {
  overflow:hidden;
  padding:0;
  margin:20px 0 0;
}

.social li {
  display:block;
  float:left;
  height:36px;
  width:36px;
  margin:0 10px 10px 0;
  opacity: 0.5
}

#cv {
  margin:0;
  padding:0;
  border-collapse: collapse;
}

#cv .date {
  position: relative;
  padding: 10px;
  color: #ffffff;
  background: rgba(0,0,0,0.5);
}

/* creates triangle */
#cv .date:after {
  content: "";
  display: block; /* reduce the damage in FF3.0 */
  position: absolute;
  right: -10px;
  top: 50%;
  width: 0;
  border-width: 10px 0 10px 10px;
  border-style: solid;
  border-color: transparent rgba(0,0,0,0.5);
  margin-top:-10px;
}

#cv .company {
  font-size:28px;
  margin:0;
  padding:0;
}

#cv .title {
  font-size:22px;
  margin:0;
  padding:0;
}

#cv .description {
  font-size:15px;
  margin:10px 0 30px;
  padding:0;
}


#footer {
  color:#999;
  text-align:center;
  width:100%;
  padding-top:20px;
  margin-top:-2px;
}

#footer a {
  color:#999;
}

@media screen and (max-width:850px) {
  #mainwrap {
    width:95%;
  }

  #content,
  .section {
    height:auto;
  }
}

@media screen and (max-width:479px) {
  .section {
    padding:15px;
  }

  .column {
    margin-left:0 0%;
    padding:0 0%;
    float:none;
  }

  .col1,
  .col2,
  .col3,
  .col4,
  .col5,
  .col6,
  .col7,
  .col8 {
      margin-left:0;
      width:100%;
  }

  #cv .col2 {
    width: 22.75% !important;
    max-width:100px !important;
  }
  #cv .col6 {
    width: auto !important;
  }

  #menu li.active span {
    display:none;
  }
}
</style>
<script type="text/javascript">
$(document).ready(function() {
			    $(".section").not(":first").hide();
			    $("ul#menu li:first").addClass("active").show(); 
			 
			    $("ul#menu li").click(function() {
			        $("ul#menu li.active").removeClass("active");
			        $(this).addClass("active");
			        $(".section").slideUp();       
			        $($('a',this).attr("href")).slideDown('slow');
			 
			        return false;
			    });
			 
			});
</script>
</head>
<div id="mainwrap">

    <header>
       <h1 style="color:white; font-size:30px;"><?php echo $login_session ?> </h1>
      <h2 style="color:white;">Creativity Takes Courage</h2>
	 <h4 style="float:right;"> <a href="home.php">HOME</a></h4>
      <ul id="menu">
        <li><a class="profile" title="Profile">Profile</a><span>Some information about me</span></li>
       </ul>
    </header>
    <div style="clear:both"></div>
    <div id="content">
      <div id="profile" class="section">
        <div class="column col3">
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
          <ul class="social">
            <li><a href="http://gmail.com/" class="external"><img src="http://andreasviklund.com/files/demo/cv-template-tpy/img/icons/gplus.png" alt="Google Plus" /></a></li>
            <li><a href="https://facebook.com/" class="external"><img src="http://andreasviklund.com/files/demo/cv-template-tpy/img/icons/facebook.png" alt="Facebook" /></a></li>
            <li><a href="https://twitter.com/" class="external"><img src="http://andreasviklund.com/files/demo/cv-template-tpy/img/icons/twitter.png" alt="Twitter" /></a></li>
            <li><a href="https://linkedin.com/" class="external"><img src="http://andreasviklund.com/files/demo/cv-template-tpy/img/icons/linkedin.png" alt="Linkedin" /></a></li>
            <li><a href="http://flickr.com/" class="external"><img src="http://andreasviklund.com/files/demo/cv-template-tpy/img/icons/flickr.png" alt="flickr" /></a></li>
			
          </ul>
        </div>
		<div class="column col5 pl-50">
		<h2><a href="edpr.php" > EDIT UR PROFILE </a></h2>
		</div>
        </div>
  </div>
</body>
</html>
