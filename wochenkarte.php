<?php
require_once 'User.php';
if (!User::isLoggedIn()) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wochenkarte</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Aktuelle Wochenkarte</h2>
    <div class="row">
        <div class="col-md-4 text-center">
            <h4>Montag Wienerschnitzel</h4>
            <img src="images/Bild1.jpg" alt="Montag Wienerschnitzel" class="img-fluid">
        </div>
        <div class="col-md-4 text-center">
            <h4>Dienstag: Curry Wurst</h4>
            <img src="images/Bild2.jpg" alt="Dienstag: Curry Wurst" class="img-fluid">
        </div>
        <div class="col-md-4 text-center">
            <h4>Mittwoch: Schweinsbraten</h4>
            <img src="images/Bild3.jpg" alt="Mittwoch: Schweinsbraten" class="img-fluid">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4 text-center">
            <h4>Donnerstag: Hühnerbrust</h4>
            <img src="images/Bild4.jpg" alt="Donnerstag: Hühnerbrust" class="img-fluid">
        </div>
        <div class="col-md-4 text-center">
            <h4>Fraitag: Gulasch</h4>
            <img src="images/Bild5.jpg" alt="Fraitag: Gulasch" class="img-fluid">
        </div>
        <div class="col-md-4 text-center">
            <h4>Samstag: Wellington</h4>
            <img src="images/Bild6.jpg" alt="Samstag: Wellington" class="img-fluid">
        </div>
    </div>
    <a href="logout.php" class="btn btn-secondary mt-4">Abmelden</a>
</div>
</body>
</html>