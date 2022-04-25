<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'includes/database-connection.php'; 
    $sql = "INSERT INTO article (title, content, published_at) 
            VALUES ('" . $_POST['title'] . "','" 
                       . $_POST['content'] . "','" 
                       . $_POST['published_at'] . "')";                  
    try {
        $result = mysqli_query($connection, $sql); 
        if ($result) {
            $id =  mysqli_insert_id($connection);
            echo "Last Recorded Inserted was at ID: {$id}";
        } else {
            echo "DB did not return a value: " . mysqli_error($connection); 
        }
    } catch (Exception $e) {
        echo "ERROR: " . $e; 
    }
}
?>

<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<form method="post">

    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at">
    </div>

    <button>Add</button>

</form>
