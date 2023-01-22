<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Task_12.6</title>
</head>
<body>

<?php
include "persons.php"; 
include "functions.inc.php";
?>
<div class="row">
    <div class="col-lg-6 col-md-6">
        <?php getPerfectPartner("Мышкина", "Анастасия", "Филипповна", $persons_array); ?>
    </div>

    <div class="col-lg-6 col-md-6">
        <?php getGenderDescription($persons_array); ?>
    </div>
</div>
</body>
</html>







