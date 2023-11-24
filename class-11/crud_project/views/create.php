
<?php
session_start()
?>


<a href="./index.php">List</a>

<br></br>
<div style="width: 500px; margin:0 auto;"></div>
<form action="./store.php" method="POST" enctype="multipart/form-data">
    <label for="title">Title:</label> <input id="title" name="title" placeholder="Enter product title" />
    <?php
    if (isset($_SESSION['errors'])){
        echo $_SESSION['errors']['title'] ?? '' ;
    }
    ?>
    <br></br>
    <label for="image">Image: </label><input id="image" type="file" name="image" />
    <?php
    if (isset($_SESSION['errors'])){
        echo $_SESSION['errors']['image'] ?? '' ;
    }
    
    if (isset($_SESSION['errors'])){
        unset($_SESSION['errors']);
    }
    ?>
    <br></br>
    <button type="submit">Save</button>
</form>