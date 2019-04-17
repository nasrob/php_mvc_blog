<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog posts</title>
</head>
<body>
    <?php require('partials/nav.view.php'); ?>
    
    <div>
        <h1>Blog Posts</h1>
        <?php foreach ($articles as $article) : ?>
            <br>
            <div>
                <h3><?= ($article->title); ?></h3>
                <li><?= ($article->article_text); ?></li>
                <li>Published <?= ($article->date); ?></li>
            </div>
            <br>
        <?php endforeach ?>
    </div>
</body>
</html>