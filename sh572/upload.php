<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
input[type=text], input[type=number], input[type=file] {
    width: 80%;
    padding: 12px 20px;
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
       <p> Select image to upload:</p>
        <br><input type="file" name="image"/></br>
		<br><input type="text" placeholder="Enter Title" name="title" id="title" required></br>
		<br><input type="number" placeholder="Enter cost" name="cost" id="cost" required></br>
		<br><input type="text" placeholder="Enter type" name="gname" id="gname" required></br>
		<br><input type="text" placeholder="Enter description" name="desc" id="desc"></br>
        <br><input type="submit" class="submit" name="submit" value="UPLOAD"/></br>
    </form>
</body>
</html>

<?php
include("session.php");
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $title = $_POST['title'];
		$cost = $_POST['cost'];
		$gname = $_POST['gname'];
		$aid = $db->query("Select aid from artist where artist.Name=\"$login_session\"");
		$desc = $_POST['desc'];
        /*
         * Insert image data into database
         */
        
        //Insert image content into database
        $insert = $db->query("INSERT into art (`title`,`image`,`cost`,`gname`,`aname`) VALUES ('".$title."','".$imgContent."','".$cost."','".$gname."','".$login_session."');");
        if($insert){
            echo "file uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
