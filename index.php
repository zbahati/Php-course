<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
<?php $name = ['james', 'Tony', 'Phillip', 'Angel', 'Alicia', 'Marta']?>
<div>
    <?php foreach ($name as $key => $name): ?>
        <?php if ($name == 'Tony'): ?>
            <li><?php echo $name ?></li>
        <?php endif ?>
    <?php endforeach?>
</div>
</body>
</html>