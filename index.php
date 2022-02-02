<?php

include_once 'includes/conn.inc.php';
include_once 'includes/insert.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Form</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <form action= "index.php" method= "POST"> 
        <input type="text" name="username" id="username" placeholder="Username">
        <button type="submit" name="select" class="button">Select</button>
        <input type="text" name="first" id="first" placeholder="First Name">
        <button type="submit" name="submit" class="button">Insert</button>
        <input type="text" name="last" id="last" placeholder="Last name">
        <button type="submit" name="delete" class="button">Delete All</button>
        <input type="text" name="email" id="email" placeholder="Email">
       
        
    </form>
</body>
</html>