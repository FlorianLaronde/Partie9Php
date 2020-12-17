<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 partie 9</title>
</head>
<body>
    <p>Nous sommes actuellement le :
        <?php echo date('l jS \of F Y'); ?> 
    </p>
    <p>Nous sommes actuellement le :
        <?php echo setlocale ('l jS \of F Y'); ?> 
    </p>
</body>
</html>