<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
    <?php
        include("includes/header.inc.php");
    ?>
    <form action="includes/select.inc.php" method="POST">
        <input type="text" placeholder="Select Student" name="select_student"/>
        <button type="select">Select Individual</button>
        <button type="submit">Select All Students</button>
        <button type="submit">Select All Tutors</button>
        <?php echo $_SESSION["selectedstudent"] ?>
    </form>
    <form action="includes/email.inc.php" method="POST">
        <label for="email">Email</label>
        <textarea name="email" id="" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>
    
</body>
</html>