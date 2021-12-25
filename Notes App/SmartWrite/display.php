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
            <form method="post">
                <h2>
                    <?php
                    $display= $_GET['displayFile'];
                    echo $display;
                    ?>
                </h2>
                <hr>
                <p>
                    <?php
                    $file = fopen("notes/$display.txt", "r");
                    while(!feof($file))
                    {
                        $row = fgets($file);
                        echo $row;
                        echo"<br>";
                    }
                    fclose($file);
                    ?>
                </p>
                <br><br>
                <input type='submit' name='delete' value='Delete Note' id="delete">
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['delete']))
    {
        unlink("notes/$display.txt");
        header('location:writtenNotes.php');
    }
?>
