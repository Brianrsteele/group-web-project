<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$to = "CKiefer15@example.com, brian.steele@rctc.edu";
$subject = "Report of Ageism";

$message = "
<html>
<head>
<title>Report of Ageism</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Description</th>
<th>Person Responsible</th>
</tr>
<tr>
<td>" . $_GET["firstname"] . "</td>
<td>" . $_GET["lastname"] . "</td>
<td>" . $_GET["description"] . "</td>
<td>" . $_GET["pr"] . "</p>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <CKiefer15@winona.edu>' . "\r\n";

mail($to,$subject,$message,$headers);
?>
