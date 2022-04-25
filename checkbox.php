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
        <input type="checkbox" name="terms" value="yes" checked> I agree to the terms and conditions
    </div>
    <button>Send</button>

</form>

</body>
</html>
