<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <style>
        @media screen and (max-width: 800px) {
    .left
     {
        width: 100%;
    }
}
        </style>
</head>

<body style="background:url(mn.jpg);background-size:cover;background-position:center">
   <h1 style="font-family:arial;font-size:60px;margin:300px;padding:120px;text-position:relative;font-size:10vw"class="left"><center> WELCOME LOGIN SUCCESSFUL <br><?php echo $_SESSION['username']; ?></center></h1>
</body>
</html>