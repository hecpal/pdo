<?php include "templates/header.php"; ?>

<h1>Welcome to Hector's Website!</h1>
<?php
echo "I hope you enjoy your visit to my first website running in IaaS AWS Cloud <br>";
echo "Please follow the below commands:";
?>

<ul>
	<li><a href="create.php"><strong>Create</strong></a> - add a user</li>
	<li><a href="read.php"><strong>Read</strong></a> - find a user</li>
	<li><a href="update.php"><strong>Update</strong></a> - edit a user</li>
	<li><a href="delete.php"><strong>Delete</strong></a> - delete a user</li>
	<li><a href="fileupload.php"><strong>Pictures</strong></a> - select a picture</li>
</ul>

<?php include "templates/footer.php"; ?>
