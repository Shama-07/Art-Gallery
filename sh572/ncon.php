<?php
include('connect.php');
?>
<html>
<head>
<style>
#fro{
	margin-left:300px;
}
input[type=text], input[type=date], input[type=file],textarea {
    width: 60%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.submit {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
</style>
</head>
<body>
 <div id="fro">
 <h1>Fill The Below Details: </h1>
 <h3 style="float:right; margin-right:50px;"><a href="event.php">Back</a></h3>
<form action=" " method="post" enctype="multipart/form-data">
		<p> Select image to upload:</p>
        <br><input type="file" name="image"/></br>
		<br><input type ="text" placeholder="Enter host name" name="host" id="host" required></br>
		<br><input type="text" placeholder="Enter Title" name="title" id="title" required></br>
		<br><input type="date" placeholder="Enter date" name="date" id="date" required></br>
		<br><textarea cols="60" rows="10" placeholder="Enter description" name="desc" id="desc" required="required"></textarea></br>
		<br><input type="text" placeholder="Enter place" name="place" id="place"></br>
		<br><input type="text" placeholder="Enter State" name="state" id="state" required></br>
        <br><input type="submit" id ="submit" class="submit" name="submit" value="submit"/></br>
		</form>
	</div>
	  </div>
	  <?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $title = $_POST['title'];
		$state = $_POST['state'];
		$gname = $_POST['place'];
		$desc = $_POST['desc'];
		$date = $_POST['date'];
		$host = $_POST['host'];
        $insert = $db->query("INSERT into events(`galleryn`,`date`,`about`,`host`,`place`,`images`,`state`) VALUES ('".$title."','".$date."','".$desc."','".$host."','".$gname."','".$imgContent."','".$state."');");
        if($insert){
            echo "Event uploaded successfully.";
        }else{
            echo "Event upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
	  </body>
</html>   
