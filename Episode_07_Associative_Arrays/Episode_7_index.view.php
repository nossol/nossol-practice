<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP LESSON</title>
</head>
<body>
<ul>
    <?php foreach($tasks as $task ) : ?>
        <?php foreach ($task as $key => $val) : ?>
            <li><strong><?= $key ?></strong> : <?= $val ?></li>
        <?php endforeach?>
    <?php endforeach?>
<!--            --><?php //foreach($tasks as $task ) : ?>
<!--                --><?php //foreach ($task as $heading => $value) : ?>
<!--                    <li>-->
<!--                        <strong>--><?//= ucwords($heading) ?><!--</strong> : --><?//= $value ?>
<!--                    </li>-->
<!--                --><?php //endforeach?>
<!--            --><?php //endforeach?>
</ul>
</body>
</html>

