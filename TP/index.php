<?php
$monthsArray = [ //création d'un tableau indexé
  1 => "janvier",
  2 => "fevrier",
  3 => "mars",
  4 => "avril",
  5 => "mai",
  6 => "juin",
  7 => "juillet",
  8 => "aout",
  9 => "septembre",
  10 => "octobre",
  11 => "novembre",
  12 => "decembre"
];

$startIntyears = 2015; // création d'une varible date de début 
$endIntYears = 2025; // création d'une variable date de fin

if (isset($_GET["submitButton"])) {
  $nbrDaysMonth = cal_days_in_month(CAL_GREGORIAN, $_GET["month"], $_GET["year"]); // pour connaitre le nombre de jours dans un mois
  $premierDays = strftime("%u", mktime(0, 0, 0, $_GET["month"], 1, $_GET["year"])); // pour connaitre quel jour démarre le mois
};

?>

<!doctype html>
<html lang="Fr">

<head>
  <title>Tp calendrier php</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.  
    En fonction des choix, afficher un calendrier comme celui-ci :  -->

  <div class="container text-center mt-5">
    <div class="title">
      <h1 class="title mt-5">Tp calendrier php</h1>
    </div>

    <div class="container">


    <form action="index.php" method="GET">
      <div class="month text-center mt-5">

        <label for="month-select">Veuillez selectionnez un mois</label>
        <select name="month" id="month-select">
          <option value="">Mois</option>

          <!-- création de la boucle foreach vu que c'est un tableau: $monthsArray correspond au tabeaux indexé
                                                                $key correspond à la clé du tableau ex: 1
                                                                $valu correspond à la valeur du tableau ex: janvier -->
          <?php
          foreach ($monthsArray as $key => $value) { ?>
            <option value="<?= $key ?>"><?= $value ?> <?= isset($_GET['month']) && $_GET['month'] == $key ? 'selected' : '' ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="year text-center mt-5">
        <label for="year-select">Veuillez selectionnez une année</label>
        <select name="year" id="year-select">
          <option value="">Année</option>

          <!-- création d'une boucle for tant que $startIntyears debut 2015 n'est pas égale ou supérieur à $endIntYears fin 2025 donc $startIntyears acremente de 1 a chaque tour -->

          <?php for ($startIntyears; $startIntyears <= $endIntYears; $startIntyears++) { ?>
            <option><?= $startIntyears ?></option>
          <?php } ?>
        </select>

      </div>
      <div class="button text-center">
        <button class="btn btn-dark" name="submitButton" type="submit">Envoyer</button>
      </div>
    </form>

    <table class="table table-bordered mt-3 ">
      <thead>
        <tr>
          <th scope="col-2">Lundi</th>
          <th scope="col-2">Mardi</th>
          <th scope="col-2">Mecredi</th>
          <th scope="col-2">Jeudi</th>
          <th scope="col-2">Vendredi</th>
          <th scope="col-2">Samedi</th>
          <th scope="col-2">Dimanche</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $currentDay = 1;

          for ($case = 1; $case <= ($premierDays + $nbrDaysMonth) - 1; $case++) {
            if ($case >= $premierDays ) {


          ?>
              <td>
                <?= $currentDay ?>
              </td>
            <?php
              $currentDay++;
            } else {

            ?>
              <td>
              </td>
            <?php
            }

            if ($case % 7 == 0) { //permet de retourner a ligne du tableau a la fin du 7 jours..
            ?>
        </tr>
        <tr><?php

            }
          }
            ?>
        </tr>
      </tbody>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>