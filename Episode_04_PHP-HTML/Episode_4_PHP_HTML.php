<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP LESSON</title>
    <style>
        header {
            background: darkolivegreen;
            padding: 2em;
            text-align: center;
        }
        h1 {
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?= "Hello " . htmlspecialchars($_GET['name']) . ', having fun?'; ?>
        </h1>
    </header>
</body>

</html>