<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Electronic Health Record System</title>
<link rel="stylesheet" href="css/index.css?<?php echo time();?>">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif|Source+Sans+Pro|Lato" rel="stylesheet">
</head>
<body>
    <header>
        <div id="logo"></div> 
        <div id="title">Electronic Health Record System</div>
    </header>
    <div class="content">
        <a class="icon patient_register" href="Register/patient.php">
            <div class="logo pRegisterl"></div>
            <div class="title pRegistert">Patient Registration</div>
        </a>
        <a class="icon hospital_register" href = "hospital/index.php">
            <div class="logo hRegisterl"></div>
            <div class="title hRegistert">Hospital Registration</div>
        </a>
        <a class="icon lab_register" href = "pathology/index.php">
            <div class="logo lab_registerl"></div>
            <div class="title lab_registert">Pathology Registration</div>
        </a>
        <a class="icon login" href = "hospital/hospital-login.php">
            <div class="logo loginl"></div>
            <div class="title logint">Login to your hospital/clinic</div>
        </a>
        <a class="icon plogin" href = "pathology/pathology-login.php">
            <div class="logo loginl"></div>
            <div class="title logint">Login to your Pathology</div>
        </a>
        <a class="icon view">
            <div class="logo viewl"></div>
            <div class="title viewt">View My details</div>
        </a>
        
    </div>
</body>
</html>
