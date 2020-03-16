<?php
	if (($_FILES["file"]["type"] == "text/xml")&&($_FILES["file"]["size"] < 5000000)){
		if ($_FILES["file"]["error"] > 0){
	    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	    }
		else{
	    	echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	    	echo "Type: " . $_FILES["file"]["type"] . "<br />";
	    	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	    	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	    	if (file_exists("C:/Users/hanfu/XAMPP/htdocs/uploadFile/" . $_FILES["file"]["name"])){
	    		echo $_FILES["file"]["name"] . " already exists. ";
	    	}
	    	else{
	    		move_uploaded_file($_FILES["file"]["tmp_name"],
	    		"C:/Users/hanfu/XAMPP/htdocs/uploadFile/" . $_FILES["file"]["name"]);
	    		echo "Stored in: " . "C:/Users/hanfu/XAMPP/htdocs/uploadFile/" . $_FILES["file"]["name"] . "<br />";
	    	}
	    }
	}
	else{
		echo "Invalid file";
	}
	
	echo "If you want to open this file, please copy store link!"
?>