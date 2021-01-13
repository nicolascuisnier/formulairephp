<?php
require_once "controller-index.php";
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Tp-formulaire php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../tp-formulaire/style.css">
</head>

<body>



    <div class="container-fluid ">
        <h1>Formulaire PHP</h1>
        <form method="POST" action="index.php">
            <div class="row ml-5">
                <div class="col-sm text-center">
                    <div class="form-group w-100">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value="<?= isset($_POST["lastname"])  ? htmlspecialchars($_POST["lastname"]) : "" ?>" placeholder="ex: Dupont">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["lastname"]) ? $erreorMessages["lastname"] : "" ?></span>
                        </div>
                    </div>


                    <div class="form-group w-100">
                        <label for="dateofBirth">Date de naissance</label>
                        <input type="date" name="dateofBirth" class="form-control" id="dateofBirth" value="<?= isset($_POST["dateofBirth"]) ? htmlspecialchars($_POST["dateofBirth"]) :  "" ?>" placeholder="ex: 18/12/1976">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["dateofBirth"]) ? $erreorMessages["dateofBirth"] : "" ?></span>
                        </div>
                    </div>


                    <div class="form-group w-100">
                        <label for="nationality">Nationalité</label>
                        <input type="text" name="nationality" class="form-control" id="nationality" value="<?= isset($_POST["nationality"]) ? htmlspecialchars($_POST["nationality"]) : "" ?>" placeholder="ex: Française">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["nationality"]) ? $erreorMessages["nationality"] : "" ?></span>
                        </div>
                    </div>


                    <div class="form-group w-100">
                        <label for="name">E-mail</label>
                        <input type="mail" name="mail" class="form-control" id="name" value="<?= isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"]) : ""  ?>" placeholder="ex: dupontjean@exe.fr">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["mail"]) ? $erreorMessages["mail"] : "" ?></span>
                        </div>
                    </div>


                    <div>
                        <div class="form-group w-100 mt-3">
                            <label for="diploma">Diplome</label>
                            <select name="diploma" class="form-control form-control-lg">
                                <option disabled selected>Choisir un diplome</option>
                                <?php
                                foreach ($diplomaArray as $key => $value) { ?>
                                    <option value="<?= $key ?>" <?= isset($_POST["diploma"]) && $_POST["diploma"] == $key ? "selected" : ""  ?>><?= $value ?>
                                    <option>

                                    <?php } ?>

                            </select>
                            <div class="text-danger" <span><?= isset($erreorMessages["diploma"]) ? $erreorMessages["diploma"] : "" ?></span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group w-100">
                        <label for="numberBadge">Nombre de Badge</label>
                        <input type="text" name="numberBadge" class="form-control" id="numberBadge" value="<?= isset($_POST["numberBadge"]) ? $_POST["numberBadge"] : "" ?>" placeholder="ex: 1">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["numberBadge"]) ? $erreorMessages["numberBadge"] : "" ?></span>
                        </div>
                    </div>


                </div>
                <div class="col-sm text-center">
                    <div class="form-group w-100">
                        <label for="username">Prénom</label>
                        <input type="text" name="username" class="form-control" id="username" value="<?= isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "" ?>" placeholder="ex: Jean">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["username"]) ? $erreorMessages["username"] : "" ?></span>
                        </div>
                    </div>



                    <div class="form-group w-100">
                        <label for="birthPay">Pay de naissance</label>
                        <input type="text" name="birthPay" class="form-control" id="birthPay" value="<?= isset($_POST["birthPay"]) ? htmlspecialchars($_POST["birthPay"]) : "" ?>" placeholder="ex: France">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["birthPay"]) ? $erreorMessages["birthPay"] : "" ?></span>
                        </div>
                    </div>



                    <div class="form-group w-100">
                        <label for="address">Adresse</label>
                        <input type="text" name="address" class="form-control" id="address" value="<?= isset($_POST["address"]) ? htmlspecialchars($_POST["address"]) : "" ?>" placeholder="ex: place de la libearation 76600 le havre">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["address"]) ? $erreorMessages["address"] : "" ?></span>
                        </div>
                    </div>



                    <div class="form-group w-100">
                        <label for="phone">Téléphone</label>
                        <input type="tel" name="phone" class="form-control" id="phone" value="<?= isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "" ?>" placeholder="ex: 00/00/00/00/00">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["phone"]) ? $erreorMessages["phone"] : "" ?></span>
                        </div>
                    </div>



                    <div class="form-group w-100">
                        <label for="numberPoleJobs">Numéro pôle emploi</label>
                        <input type="text" name="numberPoleJobs" class="form-control" id="numberPoleJobs" value="<?= isset($_POST["numberPoleJobs"]) ? htmlspecialchars($_POST["numberPoleJobs"]) : "" ?>" placeholder="ex: 000000AB">
                        <!-- <div class="text-danger">
                            <span><?= isset($erreorMessages["numberPoleJobs"]) ? $erreorMessages["numberPoleJobs"] : "" ?></span>
                        </div> -->
                    </div>
                    


                    <div class="form-group w-100 mt-3">
                        <label for="codecademyLink">Lien codecademy</label>
                        <input type="link" name="codecademyLink" class="form-control" id="codecademyLink" value="<?= isset($_POST["codecademyLink"]) ? htmlspecialchars($_POST["codecademyLink"]) : "" ?>" placeholder="www.codecademy">
                        <div class="text-danger">
                            <span><?= isset($erreorMessages["codecademyLink"]) ? $erreorMessages["codecademyLink"] : "" ?></span>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="container-fluid">
        <div class="form-group text-center w-100 ml-5">
            <label for="exampleFormControlTextarea1">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
            <textarea class="form-control" type="text" name="comment" id="exampleFormControlTextarea1" rows="3" placeholder="Saisie texte"><?= isset($_POST["comment"]) ? htmlspecialchars($_POST["comment"]) : "" ?></textarea>
            <div class="text-danger">
                <span><?= isset($erreorMessages["comment"]) ? $erreorMessages["comment"] : "" ?></span>
            </div>
        </div>


        <div class="form-group text-center w-100 ml-5">
            <label for="commentHacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
            <textarea class="form-control" type="text" name="commentHacks" id="commentHacks" rows="3" placeholder="Saisie texte"><?= isset($_POST["commentHacks"]) ? htmlspecialchars($_POST["commentHacks"]) : "" ?></textarea>
            <div class="text-danger">
                <span><?= isset($erreorMessages["commentHacks"]) ? $erreorMessages["commentHacks"] : "" ?></span>
            </div>
        </div>


        <div class="mt-3">
            <div>
                <label for="question" class="form-label fw-bold <?= isset($errorMessages["question"]) ?: "" ?> <?= isset($success["question"]) ? "text-success" : "" ?>">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </br></label>
            </div>
            <input type="radio" name="question" id="question" class="question" value="oui" <?= isset($_POST["question"]) && $_POST["question"] == "oui" ? "checked" : "" ?>>Oui
            <input type="radio" name="question" id="question" class="question" value="non" <?= isset($_POST["question"]) && $_POST["question"] == "non" ? "checked" : "" ?>>Non
            <div class="text-danger">
                <span><?= isset($errorMessages["question"]) ? $errorMessages["question"] : "" ?></span>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-primary mt-5" name="submit" type="submit">Envoyer</button>
            <a class="btn btn-primary mt-5" href="index.php" role="button">Effacer le formulaire</a>
        </div>

        </form>


        <!-- <p>Nom : <?= $_POST["lastname"] ?></p>
        <p>Prenom : <?= $_POST["username"] ?></p>
        <p>Date de naissance : <?= $_POST["dateofBirth"] ?></p>
        <p>Pay de naissance: <?= $_POST["birthPay"] ?></p>
        <p>Nationalité: <?= $_POST["nationality"] ?></p>
        <p>Adresse: <?= $_POST["address"] ?></p>
        <p>Mail: <?= $_POST["mail"] ?></p>
        <p>Téléphone: <?= $_POST["phone"] ?></p>
        <p>Diplôme: <?= $_POST["diploma"] ?></p>
        <p>Numéro pôle emplois: <?= $_POST["numberPoleJobs"] ?></p>
        <p>Nombre de badge: <?= $_POST["numberBadge"] ?></p>
        <p>Lien : <?= $_POST["codecademyLink"] ?></p>
        <p>commentaire : <?= $_POST["comment"] ?></p>
        <p>Le hacks : <?= $_POST["commentHacks"] ?></p>
        <p>Réponse : <?= $_POST["yes"] ?></p>
        <p>Réponse : <?= $_POST["no"] ?></p> -->







        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>