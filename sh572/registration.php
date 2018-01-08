<?php     //start php tag
//include connect.php page for database connection
$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'artgallery';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
		}
//if submit is not blanked i.e. it is clicked.
If(isset($_POST['submit']))
{
	$sname = $_POST['name'];
	$eemail = $_POST['email'];
	$passw = $_POST['psw'];
	$uname = $_POST['username'];
 $query = "INSERT INTO websiteusers (`fullname`,`username`,`email`,`pass`) VALUES ('".$sname."','".$uname."','".$eemail."','".$passw."');";
$result = $db->query($query);
if($result)
{
Echo "Record successfully inserted.";
}
Else
{
Echo "There is some problem in inserting record.";
}
}
?>