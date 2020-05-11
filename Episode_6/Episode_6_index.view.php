<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP LESSON</title>
</head>
<body>
<ul>
    <?php foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
    <?php endforeach; ?>

    <!--        --><?php
    //            foreach ($names as $name) {
    //                echo "<li>$name</li>";
    //            }
    //        ?>
</ul>
</body>

</html>

