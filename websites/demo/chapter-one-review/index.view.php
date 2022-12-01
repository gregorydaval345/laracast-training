<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter Review - The Fundamentals</title>
</head>

<body>
    <h1>
        <?= $business['name'] ?>
    </h1>

    <!-- Show a list of categories -->
    <ul>
        <?php foreach ($business['categories'] as $category) : ?>
            <li><?= $category; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>