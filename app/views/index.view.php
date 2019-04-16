<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog posts</title>
</head>
<body>
    <div>
        <h1>Blog Posts</h1>
        <?php foreach ($articles as $article) : ?>
            <br>
            <div>
                <li><?= ($article->title); ?></li>
                <li><?= ($article->article_text); ?></li>
                <li>Published <?= ($article->date); ?></li>
            </div>
            <br>
        <?php endforeach ?>
    </div>
</body>
</html>