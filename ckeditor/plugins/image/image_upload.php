<?php

if (file_exists("images/" . $_FILES["upload"]["name"]))
{
	echo $_FILES["upload"]["name"] . " already exists. ";
}
else
{
	move_uploaded_file($_FILES["upload"]["tmp_name"], "Q:/xampp/htdocs/ckeditor_demo/images/" . $_FILES["upload"]["name"]);
}

?>