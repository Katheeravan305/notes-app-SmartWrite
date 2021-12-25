<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Smart Write</title>
        <link rel = "icon" href ="logo.png">
        <link rel="stylesheet" type = "text/css" href="style.css">
    </head>

    <body>
        <div id="menu">
            <img src="logo.png" id="logo">
            <a href="index.html">Home</a>
            <a href="writtenNotes.php">Written Notes</a>
            <a href="newnotes.php">New Notes</a>
        </div>
        <div id="space">
            <h1>Written Notes</h1>
            <hr>
            <?php
            $num=0;
            foreach (glob("notes/*.txt") as $notes)
            {
                $num=$num+1;
                $file= basename($notes,'.txt');
                echo "<a href='display.php?displayFile=$file'>$num. $file</a><br><br>";
            }
            ?>
        </div>
    </body>
</html>
