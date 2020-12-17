<?php
    session_start();
            $timestamp = mktime (0, 0, 0, $monthsForm, 1, $yearsForm); // récupérer le 1er jour du mois
            $firstDayOfMonth = intval (date('N', $timestamp)); // savoir si le 1er jour du mois est un lundi mardi ...
            $lastDateOfMonth = date("Y-m-t", strtotime($dateString)); // récupérer le dernier jour du mois 
            $numberDayOfMonth = $lastDateOfMonth - $firstDayOfMonth + 1; // savoir combien il y a de jour dans le mois
        if (!empty ($_GET['months']) && $_GET['years'] ) {
            $monthsForm = $_GET['months'];
            $yearsForm = $_GET['years'];
            echo $monthsForm . ' ' . $yearsForm;

        } else {
          

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Partie 9</title>
</head>
<body>
       
    <!-- Formulaire -->
    <form action="tp.php" method="GET">
        <fieldset>
            <label for="monthsSelect"></label>
            <select name="months">
                <option value="">-- Choisissez le mois --</option>
                <option value="Janvier">Janvier</option>
                <option value="Février">Février</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Août">Août</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Décembre">Décembre</option>
            </select>

            <br>

            <label for="yearsSelect"></label>
            <select name="years">
                <option value="">-- Choisissez l'année --</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
            </select>

            <br>

            <input type="submit">
        </fieldset>
    </form>
    <?php 
        }
    ?>


</body>
</html>