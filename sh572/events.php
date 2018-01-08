<html>
<head>
<style type="text/css">
* {
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
  color:#000000;
}
ol,ul {
  list-style:none;
  list-style-image:none;
  list-style-position:outside;
  list-style-type:none;
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
  width:1000px;
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
#all {
  background-color: #00aba9;
  overflow-y:scroll;
}

#upcoming {
  background-color: #76608a;
  overflow-y:scroll;
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
#info {
  width:100%;
  border-collapse: collapse;
}
#info .even {
  border-bottom:1px solid #00aba9;
  border-left:1px solid #00aba9;
  border-top:1px solid #00aba9;
}
#info .odd {
  border-right:1px solid #00aba9;
  border-bottom:1px solid #00aba9;
  border-top:1px solid #00aba9;
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
<body>
<div id="mainwrap">
<header>
<ul id="menu">
        <li><a class="all" href="#all" title="ALL">ALL EVENTS</a><span>about all past events me</span></li>
        <li><a class="upcomig" href="#upcoming" title="upcoming">UPCOMING EVENTS</a><span>current events me</span></li>
      </ul>
	  </header>
	  <div style="clear:both"></div>
	  <div id="content">
      <div id="all" class="section">
        <div class="column col3">
<table id="info">
<?php
include('connect.php');
 $query = "Select * from events;";
	  $res = $db->query($query);
	  while($result = mysqli_fetch_array($res)){?>
	  <tbody>
	
	  <tr style="height:300px;">
	      <td class="even"><br><?php echo'<a href="#"><img  style="margin-left:50px; margin-top:10px;" src="data:image/jpeg;base64,'.base64_encode($result['images']).'" height="300px" width="600px"/></a>';?></br>
		  <br><h4 style="margin-left:50px;">HELD ON: <?php echo $result['date'];?></h4></br>
		  <br><h4 style="margin-left:50px;">PLACE: <?php echo $result['place'];?></h4></br>
		  <br><h4 style="margin-left:50px;">HOSTED BY: <?php echo $result['host'];?></h4></br></td>
		  <td class="odd">
		  <h2 style ="text-decoration:underline;"><br> <?php echo $result['galleryn'];?></br></h2>
		  <br><?php echo $result['about'];?></br></td>
	</tr>
</tbody>	
	  <?php } ?>
	  </table>
	  </div>
	  </div>
	  </div>
	  <div id="upcoming" class="section">
        <table id="cv">
          <tbody>
          </tbody>
        </table>

      </div>
	  </div>
	  </body>
	  </html>