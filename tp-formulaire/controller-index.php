<?php

$erreorMessages = [];

$regexName = "/^[a-zA-Z]+$/";
$regexNumber = "/^[a-zA-Z0-9]+$/";
$regexAdress =  "/^([0-9a-z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$/";
$regexMail = "/^[__A-Za-z0-9-\+]+(\.\[__A-Za-z0-9-]+)** @";
$regexUrl = "/^[http][a-z0-9][\%\_\+\.\,\#\?\!\&\=\-]+$/";
$regexAnniv = "/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/";

$diplomaArray = [

    1 => "Sans",
    2 => "Bac+1",
    3 =>  "Bac+2",
    4 => "Bac+3",
    5 => "sup"
];




if (isset($_POST["lastname"])) {
    if (!preg_match($regexName, $_POST["lastname"])) {
        $erreorMessages["lastname"] = "Veuillez saisir un nom valide";
    }
    if (empty($_POST["lastname"])) {
        $erreorMessages["lastname"] = "Veuillez saisir votre nom";
    }
}






if (isset($_POST["username"])) {
    if (!preg_match($regexName, $_POST["username"])) {
        $erreorMessages["username"] = "Veuillez saisir un prénom valide";
    }
    if (empty($_POST["username"])) {
        $erreorMessages["username"] = "Veuillez saisir votre prénom";
    }
}





if (isset($_POST["dateofBirth"])) {
    if (!preg_match($regexAnniv, $_POST["dateofBirth"])) {
        $erreorMessages["dateofBirth"] = "Veuillez saisir une date valide";

    if (empty($_POST["dateofBirth"])) {
        $erreorMessages["dateofBirth"] = "Veuillez saisir une date valide";
    }
    
}

}


if (isset($_POST["birthPay"])) {
    if (!preg_match($regexName, $_POST["birthPay"])) {
        $erreorMessages["birthPay"] = "Veuillez saisir une date valide";
    }
    if (empty($_POST["birthPay"])) {
        $erreorMessages["birthPay"] = "Veuillez saisir une date valide";
    }
}



if (isset($_POST["nationality"])) {
    if (!preg_match($regexName, $_POST["nationality"])) {
        $erreorMessages["nationality"] = "Veuillez saisir un texte valide";
    }
    if (empty($_POST["nationality"])) {
        $erreorMessages["nationality"] = "Veuillez saisir un texte valide";
    }
}




if (isset($_POST["address"])) {
    if(!preg_match($regexAdress, $_POST["address"])){
    }
    if (empty($_POST["address"])) {
        $erreorMessages["address"] = "Veuillez saisir une adresse valide";
    }
} 





if (isset($_POST["mail"])) {
    if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){// evite les regex
        $erreorMessages["mail"] = "Adresse mail non valide";
    }

    if (empty($_POST["mail"])) {
        $erreorMessages["mail"] = "Veuillez saisir une adresse mail valide";
    }
}




if (isset($_POST["phone"])) {
    if (!preg_match($regexNumber, $_POST["phone"])) {
        $erreorMessages["phone"] = "Veuillez saisir un numéro valide";
    }
    if (empty($_POST["phone"])) {
        $erreorMessages["phone"] = "Veuillez saisir un numéro valide";
    }
}





if(isset($_POST["submit"]) && !isset($_POST["diploma"])){
    $erreorMessages["diploma"] = "Veuillez choisir un diplome";
}

if(isset($_POST["diploma"])){
    if(!array_key_exists($_POST["diploma"], $diplomaArray)){
        $erreorMessages["diploma"] = "choisir un vrai diplome";
    }
}




if (isset($_POST["numberJobs"])) {
    if (!preg_match($regexNumber, $_POST["numberJobs"])) {
        $erreorMessages["numberjobs"] = "Veuillez saisir un numéro valide";
    }
    if (empty($_POST["number"])) {
        $erreorMessages["number"] = "Veuillez saisir un numéro valide";
    }
}




if (isset($_POST["numberPoleJobs"])) {
   
    if (empty($_POST["numberPolesJobs"])) {
        $erreorMessages["numberPoleJobs"] = "Veuillez saisir un numéro valide";
    }
}




if (isset($_POST["numberBadge"])) {
    
    if (empty($_POST["numberBadge"])) {
        $erreorMessages["numberBadge"] = "Veuillez saisir un numéro valide";
    }
}




if (isset($_POST["codecademyLink"])) {
    if(!filter_var($_POST["codecademyLink"], FILTER_VALIDATE_URL)){// evite les regex
        $erreorMessages["codecademyLink"] = "Url non valide";
    
    }
    if (empty($_POST["codecademyLink"])) {
        $erreorMessages["codecademyLink"] = "Veuillez saisir un lien valide";
    }
}



if (isset($_POST["comment"])) {
    if (empty($_POST["comment"])) {
        $erreorMessages["comment"] = "Veuillez saisir un texte valide";
    }
}




if (isset($_POST["commentHacks"])) {
    if (empty($_POST["commentHacks"])) {
        $erreorMessages["commentHacks"] = "Veuillez saisir un texte valide";
    }
}




if (isset($_POST["question"]) && !isset($_POST['question'])) {
    $errorMessages["question"] = "Veuillez faire un choix";
}



  

