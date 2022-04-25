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
        <input type="radio"> Red
    </div>
    <div>
        <input type="radio"> Green
    </div>
    <div>
        <input type="radio"> Blue
    </div>

    <button>Send</button>

</form>

</body>
</html>
