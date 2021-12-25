<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="style.css">
        <title>SmartWrite</title>
        <link rel = "icon" href ="logo.png">
    </head>
    <body>
        <div id="menu">
            <img src="logo.png" id="logo">
            <a href="index.html">Home</a>
            <a href="writtenNotes.php">Written Notes</a>
            <a href="newnotes.php">New Notes</a>
        </div>

        <div id="space">
            <h1>Notes</h1>
            <hr>
            <form method="post" align="center">
                <label>Title:</label><br>
                <input type="text"  id="title" name="title" required/>
                <br>
                <label>Description:</label><br>
                <textarea name="notes" cols="80" rows="13" required/></textarea>
                <br><br>
                <input type="submit" name="submit" value="Create Note" id="create">
                <?php
                if(isset($_POST["submit"]))
                {
                    $name = $_POST["title"];
                    $notes=$_POST["notes"];
                    $file = fopen("notes/$name.txt", "a+");
                    fwrite($file,  $notes."\n");
                    header('location:writtenNotes.php');
                }
                ?>
            </form>
        </div>
    </body>
</html>

