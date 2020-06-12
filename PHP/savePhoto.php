<?php
	function getRandomFileName($path, $extension=''){
        $extension = $extension ? '.' . $extension : '';
        $path = $path ? $path . '/' : '';
        do {
            $name = md5(microtime() . rand(0, 9999));
            $file = $path . $name . $extension;
        } while (file_exists($file));
        return $name;
    }
    $root = $_SERVER['DOCUMENT_ROOT'];
	$path = 'PHP/image';
	$target='';
	if($_POST['src']!=""){
		$extension = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
		$filename = getRandomFileName($path, $extension);
		$target = $root. '/'.$path . '/' . $filename . '.' . $extension;
		move_uploaded_file($_FILES['img']['tmp_name'], $target);
		echo $path . '/' . $filename . '.' . $extension;
	}
?>