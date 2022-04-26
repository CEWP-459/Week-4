<?php

ini_set('display_errors', 1); 
require 'includes/database-connection.php'; 

$errors = [];
$title = '';
$content = '';
$published_at = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    if ($_POST['title'] == '') {
        $errors[] = "Title should not be empty!";
    }
    if ($_POST['content'] == '') {
        $errors[] = "Content should not be empty!";
    }
    
    if (empty($errors)) {
        $connection = getDB();
        $sql = "INSERT INTO article (title, content, published_at) 
                VALUES (?,?,?)";                  
        try {
            $sqlStmt = mysqli_prepare($connection, $sql); 
            if ($sqlStmt) {
                mysqli_stmt_bind_param($sqlStmt, 'sss', $title, $content, $published_at);
                if (mysqli_stmt_execute($sqlStmt)) {
                    $id = mysqli_stmt_insert_id($sqlStmt);
                    echo "Inserted Record was at ID: {$id}";
                } else {
                    echo mysqli_stmt_error($sqlStmt);
                }
            } else {
                echo "DB did not return a value: " . mysqli_error($connection); 
            }
        } catch (Exception $e) {
            echo "ERROR: " . $e; 
        }
    }

}

?>

<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<form method="post">

    <ul>
        <?php foreach ($errors as $err) : ?>
            <li> <?= $err ?>
        <?php endforeach ?>
    </ul>

    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title" value=<?= htmlspecialchars($title); ?>>
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content" value=<?= htmlspecialchars($content); ?>></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at" value=<?= htmlspecialchars($published_at); ?>>
    </div>

    <button>Add</button>

</form>
