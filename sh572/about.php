<?php
include("session.php");
$query = "select * from artist,websiteusers where artist.uid = websiteusers.uid AND websiteusers.fullname = \"$login_session\"";
 $res= $db->query($query);
 while($result = mysqli_fetch_array($res)){
echo "name :".$result["Name"]."";
echo "Specialization :".$result["Specialization"]."";
 }

?>