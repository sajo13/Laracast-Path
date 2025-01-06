<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <ul>
        <?php echo $business['name'] ?>
       
        <?php foreach ($business['categories'] as $category) : ?>
            <li> <?php echo $category ?>  </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>