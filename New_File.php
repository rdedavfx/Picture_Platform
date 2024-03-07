<?php
	$Name = $_POST["File_Name"];
	$Text = $_POST["File_Text"];
	
	if ($Text != "")
	{
		$File = fopen($Name, "a");
		fwrite($File, $Text);
		fclose($File);
	}
?>