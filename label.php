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
        <label for="title">Title:</label> <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="content">Content:</label> <textarea name="content" rows="4" cols="40" id="content"></textarea>
    </div>

    <div>
        <label><input type="checkbox" name="visible" value="yes">Visible</label>
    </div>

    <div>
        <p>Colour:</p>
        <label><input type="radio" name="colour" value="blue" checked>Blue<br></label>
        <label><input type="radio" name="colour" value="red">Red<br></label>
        <label><input type="radio" name="colour" value="green">Green</label>
    </div>

    <button>Send</button>

</form>

</body>
</html>
