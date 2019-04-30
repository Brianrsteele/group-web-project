<?php

    echo `whoami`;

    if($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['description']) && isset($_GET['pr'])) {
            
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $description = $_GET['description'];
            $personResponsible = $_GET['pr'];
            
            if (empty($firstname)) {
                $firstname = "No name submitted.";
            }
            
            if (empty($lastname)) {
                $lastname = "No name submitted.";
            }
            
            if (empty($description)) {
                $description = "No description submitted.";
            }
            
            if (empty($personResponsible)) {
                $personResponsible = "No name submitted.";
            }
            
            $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
            $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
            $description = filter_var($description, FILTER_SANITIZE_STRING);
            //$personResponsible = filter_var($personResponsible, FILTER_SANITIZE_STRING);
            
            $day = getdate();
            
            
            $payload = array($day, $firstname, $lastname, $description, $personResponsible);
            
            $file = fopen('../../reports/reports.csv', 'w') or die('Cannot open file: ' . $file); ;
            
            fputcsv($file, $payload);
            
            fclose($file);
            
            $msg = "Thank you for your report. Your information has been saved."
            
            
        } else {
            $msg = "There was an issue with your submission.";
        }
        
    }



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ageism in Technology</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="http://72.14.191.56/favicon.ico">
        <link rel="stylesheet" href="_css/reset.css">
        <link rel="stylesheet" href="_css/styles.css">
        <meta name="description" content="Welcome to TeamJPG's Ageism Site.">
        <meta name="keywords" content="ageism, ageism in technlogy, signs of ageism, workplace, technology, teamjpg">
        <meta name="author" content="Brian Steele">
        
	</head>
	<body>
        <header>
            <h1>Team JPEG</h1>
            <h2>Ageism in Technology</h2>
        </header>
        <nav>
            <ul>
                <li id="skip"><a href="#main">Skip to Main</a></li>
                <li id="current"><a href="index.html">Home</a></li>
                <li><a href="overview.html">Overview</a></li>
                <li><a href="ageism_signs.html">Signs of Ageism</a></li>
                <li><a href="calendar.html">Training Calendar</a></li>
                <li><a href="report.html">Report</a></li>
            </ul>
        </nav>
        <main id="main">
            <h3>Report Submitted</h3>
            <p>
                <?php
                    echo $msg;
                ?>
            </p>
            <p></p>
        </main>
        <footer>
            <div class="col">
            <p>Team JPG:</p>
            <ul>
                <li><a href="mailto:BBolin17@winona.edu">Ben Bollin</a></li>
                <li><a href="mailto:CKiefer15@winona.edu">Chase Kiefer</a></li>
                <li><a href="mailto:APoss17@winona.edu">Andrew Poss</a></li>
                <li><a href="mailto:brian.steele@rctc.edu">Brian Steele</a></li>
            </ul>
            </div>
        
            <div class="col">
            <p>Accessability</p>
            <ul>
                <li><a href="accessability.html">Accessability Statement</a></li>
            </ul>
            </div>    
            <div class="col"> 
            <p>Site Information</p>
            <ul>
                <li>Updated: 4/24/2019</li>
                <li>&copy;TeamJPG, 2019</li>
            </ul>
            </div>
            
        </footer>
	
	</body>
</html>