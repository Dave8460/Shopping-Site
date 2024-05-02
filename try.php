<?php
if(isset($_POST['submit']))
{
	$var=$_POST['f1'];
	Print_r($var);
}
?>
<html>
<body>
<form method="post">
	<input type="file" name="f1[]" multiple>
	<input type="submit" name="submit">
</form>
</body>
</html>