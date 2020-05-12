<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP LESSON</title>
</head>
<body>
<h1>Tasks For The Day</h1>
<ul>
    <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>
    <li>
        <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>
    <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
            <span class="icon">&#9989;</span>
        <?php else : ?>
            <span class="icon">&#10060;</span>
        <?php endif ?>
    </li>
    <li>
        <strong>fun Factor: </strong>
        <?php if ($task['fun_factor']) : ?>
            <span class="icon">&#128175;</span>
        <?php else : ?>
            <span class="icon">&#128169;</span>
        <?php endif ?>
    </li>
</ul>
</body>
</html>

