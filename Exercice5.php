<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercice 5 partie 9</title>
        </head>
        <body>
            
            <?php
                //  date du 16 mai 2016
                $beforeDate = new DateTime('16-05-2016');
                //  date du jour
                $todayDate = new DateTime('16-12-2020');

                // différence de jours entre aujourd'hui et l'ancienne date
                $daysNumber = $todayDate->diff($beforeDate)->format('%a');
            ?>

                <p>Le nombre de jours entre le 16 mai 2016 et aujourd'hui est de : <?=$daysNumber;?> jours</p>
        </body>
    </html>