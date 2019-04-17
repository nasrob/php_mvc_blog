<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add a post</title>
    </head>
    <body>
        <?php require('partials/nav.view.php'); ?>
        <div>
            <h1>Creat a blog post</h1>

            <form method="POST" action="/add-article">
                <label for="title">title</label>
                <input name="title" type="text"><br><br>
                <label for="text">Content</label>
                <textarea name="text"
                    cols="30" rows="7"
                    minlength="100" maxlength="3000">You can write here !</textarea>
                <br><br>

                <label for="category">Category</label>
                <select name="category" id="">
                    <option value="">-- Select a Category --</option>
                    <?php
                        $categories = $app['config']['categories'];
                    ?>
                    <?php foreach ($categories as $category)?>
                    <option value="<?= $category ?>"><?= $category ?></option>
                </select><br><br>
                <label for="status">Do you Want to publish your article?</label>
                <input type="radio" name="status" value="1">Yes
                <input type="radio" name="status" value="0" checked>No
                <br><br>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </body>
</html>


