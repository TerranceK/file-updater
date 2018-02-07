<!DOCTYPE HTML5>
	
<html lang='en'>
	<head>
		<title>File Viewer</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form>
			<fieldset>
				<legend> File Contents </legend>
				<?php
					$fileHandle = fopen('./Resources/thefile.txt', 'r');
					while(!feof($fileHandle))
					{
						$fileData = fgets($fileHandle);
						print $fileData;
						print "<br \>";
					}
					fclose($fileHandle);
				?>
				<hr \>
				<input type="button" onclick="location.href='index.php';" value="Add File Content"></input>
			</fieldset>
			
		</form>
	</body>
</html>

