<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Eingabeformular</title>
</head>
<body>
<div style="max-width: 300px; margin: auto; padding-top: 50px;">
    <h2>Eingabeformular</h2>
    <form action="wochenkarte.php" method="post">
        <div>
            <label for="feld1">Eingabefeld 1:</label>
            <input type="text" id="feld1" name="feld1" required>
        </div>
        <div style="margin-top: 10px;">
            <label for="feld2">Eingabefeld 2:</label>
            <input type="text" id="feld2" name="feld2" required>
        </div>
        <div style="margin-top: 20px;">
            <button type="submit">Abschicken</button>
        </div>
    </form>
</div>
</body>
</html>
