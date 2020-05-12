<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP LESSON</title>
    <style>

    </style>
</head>
<body>
<ul>
    <?php foreach ($animals as $animal) : ?>
        <li><?= $animal; ?></li>
    <?php endforeach; ?>

    <!--        --><?php
    //            foreach ($animals as $animal) {
    //                echo "<li>$animal</li>";
    //            }
    //        ?>
</ul>
</body>

</html>

