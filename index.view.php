<!-- index.view.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
        
        ul {
            background: #eee;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
          <!-- get users -->

        <ul>
            <?php foreach ($users as $user) : ?>
                <li><?= $user; ?></li>
            <?php endforeach; ?>
        </ul>
    </header>
</body>

</html>
