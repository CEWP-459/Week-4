<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">
    <div>
        Title: <input type="text" name="title">
    </div>

    <div>
        Content: <textarea name="content" rows="4" cols="40"></textarea>
    </div>

    <div>
        <input type="checkbox" name="visible" value="yes">Visible
    </div>

    <div>
        <p>Colour:</p>
        <input type="radio" name="colour" value="blue" checked>Blue<br>
        <input type="radio" name="colour" value="red">Red<br>
        <input type="radio" name="colour" value="green">Green
    </div>

    <button>Send</button>

</form>

</body>
</html>
