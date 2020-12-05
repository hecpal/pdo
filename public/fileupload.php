<html>
<body>

<form action="fileupload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1">

</form>

<?php

if(isset($_POST['Submit1']))
{ 
$filepath = "/home/ubuntu/images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "The file ". basename( $_FILES["file"]["name"]). " uploaded.<br>";

echo "The File Name = " . $_FILES["file"]["name"] . "<br>";

echo "File Type = " . $_FILES["file"]["type"] . "<br>";

echo "File Size = " . ($_FILES["file"]["size"] / 5120) . " kB<br>";

echo "Temporary File Location = " . $_FILES["file"]["tmp_name"];
} 
else 
{
echo "Error !!";

}
}

?>
</body>

</html>
<a href="index.php">Back to home</a>
