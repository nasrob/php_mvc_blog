<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add a post</title>
    </head>
    <body>
        <div>
            <h1>Creat a blog post</h1>

            <form method="POST" action="/posts">
                <label for="title">title</label>
                <input name="title" type="text"><br>
                <label for="post_text">Content</label>
                <label for="category">Category</label>
                
                <select name="category" id="">
                    <option value="">-- Select a Category --</option>
                    <?php
                        $categories = $app['config']['categories'];
                    ?>
                    <?php foreach ($categories as $category)?>
                    <option value="<?= $category ?>"><?= $category ?></option>
                </select><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </body>
</html>

