<!DOCTYPE html>

<html lang="pl-PL" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Tramwajarz XD</title>
    <link href="http://fonts.cdnfonts.com/css/bahnschrift" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet" />
</head>
<body>
<div class="page">
    <div id="panel">
        <form action="panel.php" method="get">
            <label id="line" for ="linia">Linia</label>
            <input class="input" type="text" id="linia" name="linia"><br /><br />
            <label for="brygada">Brygada</label>
            <input class="input" type="text" id="brygada" name="brygada"><br /> <br />
            <label id="typDnia" for="typ">Typ dnia</label>
            <input class="input" type="text" id="typ" name="typ">
            <input type="submit" value="Zatwierdź"  class="actual"><br />
        </form>
    </div>
</div>

</body>
</html>