<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Generated Nav Links</h1>
<?php foreach ($nav as $page => $link): ?>
            <?=anchor($link, $page);?>
<?php endforeach; ?>

        <h1>Hard-Coded Nav Links</h1>
            <?=anchor('/', 'Home');?>

<?php if (array_key_exists('ACCESS_SECRET_PAGE', $permissions) && $permissions['ACCESS_SECRET_PAGE']): ?>
            <?=anchor('secret', 'Secret Page');?>
<?php endif; ?>

    </body>
</html>
