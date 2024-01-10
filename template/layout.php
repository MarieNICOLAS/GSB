<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title;?></title>
</head>
<body>
    <?php include '../view/components/header/header.php';?>

    <?php echo $content; ?>

    <?php include '../view/components/footer/footer.php'; ?>
</body>
</html>