<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP LESSON</title>
</head>
<body>
<h1>Tasks For The Day</h1>
<ul>
    <!--        --><?php //foreach($tasks as $task ) : ?>
    <!--            --><?php //foreach ($task as $heading => $value) : ?>
    <!--                <li>-->
    <!--                    <strong>--><?//= ucwords($heading) ?><!--</strong> : --><?//= $value ?>
    <!--                </li>-->
    <!--            --><?php //endforeach?>
    <!--        --><?php //endforeach?>
    <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>
    <li>
        <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>
    <li>
        <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>

</ul>
</body>
</html>

