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
                $beforeDate = new DateTime( '01-02-2016');
                //  date du jour
                $todayDate = new DateTime('01-03-2016');

                // différence de jours entre aujourd'hui et l'ancienne date
                $daysNumber = $todayDate->diff($beforeDate)->format('%a');
            ?>

                <p>Il y avait <?=$daysNumber;?> jours durant le mois de février 2016.</p>
        </body>
    </html>