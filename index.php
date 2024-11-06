<?php
// Überprüfen, ob der Cookie 'cookies_accepted' gesetzt ist
if (!isset($_COOKIE['cookies_accepted']) || $_COOKIE['cookies_accepted'] != "true") {
    header("Location: cookies.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Frühstückspension</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Login</h2>
    <form action="index.php" method="post">
        <div class="form-group">
            E-Mail:
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            Passwort:
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Anmelden</button>
    </form>

    <?php
    require 'User.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::get($email, $password);

        if ($user) {
            $user->login($email, $password);
            header("Location: wochenkarte.php");
            exit;
        } else {
            echo "<p class='text-danger mt-3'>Ungültige Zugangsdaten.</p>";
        }
    }
    ?>
</div>
</body>
</html>
