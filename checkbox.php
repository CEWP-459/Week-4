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

    <p>Which colours do you like?</p>

    <div>
        <input type="checkbox" value="red" name="color[]"> Red
    </div>
    <div>
        <input type="checkbox" value="green" name="color[]"> Green
    </div>
    <div>
        <input type="checkbox" value="blue" name="color[]"> Blue
    </div>

    <button>Send</button>

</form>

</body>
</html>
