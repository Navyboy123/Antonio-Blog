<?php
require_once (__DIR__."/../model/Config.php");
?>
<h1>Create Blog Post </h1>

<form method="post" action="<?php echo $path . "Controller/Create-Post.php";?>">
    <div>
        <label for="Title">Title:</label>
        <input type="Text" name="title">
    </div>
    
    <div>
        <label for="post">Post:</label>
        <textarea name="Host"></textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>


