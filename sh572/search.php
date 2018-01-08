<?php
include ('artist.php');
?>
<html>
<head>
<style type="text/css">
.side{
	float:right;
	color:#ffffff;
}
</style>
</head>
<body>
 <div class="side">
	  <table>
	  <?php
	  echo "hey there";
	  if(isset($_POST['submit'])){
        $name = $_POST['atr'];
		echo $name;
		$qry = "select * from artist where artist.Name = \"$name\"";
 $res= $db->query($query);
		while($resu = mysqli_fetch_array($res)){
	?>
            <tbody>
              <tr>
                <td class="odd">Name</td>
                <td class="even"><?php echo $name ;?>  </td>
              </tr>
              <tr>
                <td class="odd">Date of birth</td>
                <td class="even"><?php echo $resu['dob'];?></td>
              </tr>
              <tr>
                <td class="odd">Address</td>
                <td class="even">Medford, MA</td>
              </tr>
              <tr>
                <td class="odd">Specialization</td>
                <td class="even"><?php echo $resu['specialization'];?></td>
              </tr>
              <tr>
                <td class="odd">Age</td>
                <td class="even"><?php echo $resu['age'];?></td>
              </tr>
            </tbody>
 <?php }; ?>
        </table>
	  <?php }; ?>
	  </div>
	  </body>
	  </html>