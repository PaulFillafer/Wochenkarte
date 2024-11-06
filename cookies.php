<?php
if (isset($_COOKIE['cookies_accepted']) && $_COOKIE['cookies_accepted'] == "true") {
    header("Location: index.php");
    exit;

}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('cookies_accepted', 'true', time() + (7 * 24 * 60 * 60), "/"); //7*24*60*60 = 604800 = 7 Tage oder
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie-Einwilligung</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center">
    <h1 class="mt-5">Wochenkarte</h1>
    <h2>Willkommen</h2>
    <p>Diese Seite verwendet Cookies.</p>
    <form method="post">
        <button type="submit" class="btn btn-primary">Akzeptieren</button>
    </form>
</div>
</body>
</html>