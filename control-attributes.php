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
        <fieldset>
            <legend>Article</legend>
            <div>
                <label for="title">Title:</label> <input type="text" name="title" id="title" value="Name"
                    readonly>
            </div>

            <div>
                <label for="content">Content:</label> <textarea name="content" rows="4" cols="40" id="content"
                    placeholder="Description" autofocus></textarea>
            </div>
        </fieldset>

        <fieldset>
            <legend>Attributes</legend>
            <div>
                <label><input type="checkbox" name="visible" value="yes" disabled checked>Visible</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Colour</legend>
            <div>
                <label><input type="radio" name="colour" value="blue" checked>Blue<br></label>
                <label><input type="radio" name="colour" value="red">Red<br></label>
                <label><input type="radio" name="colour" value="green">Green</label>
            </div>
        </fieldset>
        <button>Send</button>

    </form>

</body>

</html>