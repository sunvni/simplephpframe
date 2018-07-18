<!DOCTYPE html>
<html>
<head lang="jp">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="manifest" href="<?=base_url('manifest.json')?>">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once('partials/css.php'); ?>
    <?php require_once('partials/js.php'); ?>
</head>
<body style="">

<?php require_once("partials/{$data['menu']}.php"); ?>
    <h2>Hello <?=$data['name']?></h2>
    <?php require_once('partials/footer.php'); ?>
</body>
</html>