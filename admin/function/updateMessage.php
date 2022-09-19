<?php 


include 'connect.php';

$id = $_POST['id'];

$query = $conn -> query("UPDATE massages SET view = 1 WHERE id = $id ");

if ($query) {

	echo "message updated";

} else {
	echo $conn -> error ;
}