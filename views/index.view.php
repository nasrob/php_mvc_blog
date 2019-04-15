<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog posts</title>
</head>
<body>
    <div>
    <h1>Blog Posts</h1>
        <?php foreach ($blog_posts as $blog_post) : ?>
            <li>
                <?= ($blog_post->title); ?>
            </li>
        <?php endforeach ?>
    </div>
</body>
</html>