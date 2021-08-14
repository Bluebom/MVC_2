<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= PATH_TO_ASSETS?>css/style.css">
    <title><?= self::titulo; ?></title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Danki Code</h2>
            </div>
            <nav>
                <ul>
                <?php foreach(self::menuItems as $value): ?>
                    <li><a href="<?= strtolower($value); ?>"><?= $value; ?></a></li>
                <?php endforeach; ?>
                </ul>
                <br>
            </nav>
        </div>
    </header>
    