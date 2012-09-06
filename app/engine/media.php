<?php
if (isset($parts[3]) && $parts[3] != '') {
		$file = $parts[3];
		$fileparts = explode('.', $file);
		$fileName = $fileparts[0];
		$fileExt = $fileparts[1];

		$result = $db->fetchRow($db->quoteInto("SELECT * FROM media WHERE name = ?", $fileName));
		if (!empty($result)) {
			$file_name = $result['file_name'];
			$file_ext = $result['file_ext'];

			$filePath = $PATH['physical']['assets'] . '/files/' . $file_name . '.' . $file_ext;
			if (file_exists($filePath)) {
				
				if($file_ext == "jpg" || $file_ext == "jpeg" || $file_ext == "JPG" || $file_ext == "JPEG") {
					$type = 'image/jpeg';
				} else if($file_ext == "png" || $file_ext == "PNG") {
					$type = 'image/png';
				}
				$fp = fopen($filePath, 'rb');
				header('Content-Type:' . $type);
				header('Content-Length: ' . filesize($filePath));

				fpassthru($fp);
			} else
				echo "file not found";
		} else
			echo "Media could not be found.";
	} else
		echo "Media could not be found.";