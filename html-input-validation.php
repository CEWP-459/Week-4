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

<form method="post" novalidate>

    <div>
        email: <input type="email" name="email" required>
    </div>

    <div>
        url: <input type="url" name="url">
    </div>

    <div>
        number: <input type="number" name="count" min="1" max="10">
    </div>

    <button>Send</button>

</form>

</body>
</html>
