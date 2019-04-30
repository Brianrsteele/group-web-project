<?php
$to = "chase.kiefer15@gmail.com";
$subject = "Report of Ageism";

$firstname = filter_var($_GET["firstname"], FILTER_SANITIZE_EMAIL);
$lastname = filter_var($_GET["lastname"], FILTER_SANITIZE_EMAIL);
$description = filter_var($_GET["description"], FILTER_SANITIZE_EMAIL);
$pr = filter_var($_GET["pr"], FILTER_SANITIZE_EMAIL);


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
<td>" . $firstname . "</td>
<td>" . $lastname . "</td>
<td>" . $description . "</td>
<td>" . $pr . "</p>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message,$headers);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
