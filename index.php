<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
body {
    background-color: #add8e6;
}
</style>
<head>
    <title>Search</title>
    <center>
    <p> </p>
    <img src="images\crsearch.png" alt="LSPD Database">
    <p> </p>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css\search.css"/>
</head>
<body>
    <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
	<?php
		// The form is submitted.
		if(isset($_POST["query"])) {
			// Now check if the posted input element is empty, if empty stop by echo a error message
			// Otherwhise continue executing script
			if(empty($_POST["search"])) {
				echo "You forgot to fill in this form-element.";

			}else{
				// Continue
			}
}
?>
	<form action="admin\index.php" method="get">
    <p> </p>
	<p>Have an account?</p>
    <form action="login.php" method="get">
	    <input type="submit" value="Login!" 
         name="Login" id="frm1_submit" />
	</form>
	<p> </p>
	</form>
	<FORM METHOD="LINK" ACTION="police\active.php">
	<INPUT TYPE="submit" VALUE="View active warrants">
	</FORM>
    </center>
</body>
</html>