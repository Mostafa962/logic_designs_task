<?php
	require_once "config.php";
	if (isset($_FILES['file'])) {
		$newFileName = time().$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' .$newFileName);
		$files = new Files();
		$files->file_name = $newFileName;
		$files->save();
		echo Files::ShowFiles("SELECT * FROM files order by id DESC limit 1");
	}
