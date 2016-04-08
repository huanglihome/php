<?php
 /*上传限制
     if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/pjpeg"))&&($_FILES["file"]["size"]<200000000))
	 {  */
      if ($_FILES["file"]["error"] > 0)
      {
	     echo "Error:".$_FILES["file"]["error"]."<br />";
	  }
	  else{
	     echo "Upload:".$_FILES["file"]["name"]."<br />";
		 echo "Type:".$_FILES["file"]["type"]."<br />";
		 echo "Size:".($_FILES["file"]["size"]/1024)."kb<br />";
		 echo "Stored in:".$_FILES["file"]["tmp_name"];
		 
		 //保存文件
		 if (file_exists("upload/".$_FILES["file"]["name"]))
		 {
			 echo $_FILES["file"]["name"]."already exists.";
		 }
		 else{
			 move_uploaded_file($_FILES["file"]["tmp_name"],
			 "upload/".$_FILES["file"]["name"]);
		 echo "Stored in:"."upload/".$_FILES["file"]["name"];
		 }
	 }
     /*
	 else{
		 echo "Invalid file";
	 }   */
 ?>