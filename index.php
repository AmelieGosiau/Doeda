<?php
    session_start();
    if(isset($_SESSION["name"])){
        header('Location: /Doeda/extra/userpage.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Doeda</title>
</head>

<body>
<div class="header">
<h1>Todo app</h1>
</div>
<form action="/hey/setSession.php" method ="POST">
            <label>Pick a name
                <input type="text" name = "name" placeholder = "Name">
            </label>
            <input type="submit" value = "submit">
    </form>
    <br>
        <label>Date:</label>
        <i><?php
          $time = time();
             echo date("m-d-Y", $time);
        ?>
        </i>
</body>

</html>