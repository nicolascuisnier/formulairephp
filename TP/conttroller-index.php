<?php

$erreorMessages = [];

$regexName = "/^[a-zA-Z]+$/";


    if(isset($_GET["lastname"])){
       
        if(!preg_match($regexName, $_GET["lastname"])){
            $erreorMessages["lastname"] = "Veuillez saisir un nom valide";
        }
        if(empty($_GET["lastname"])){
            $erreorMessages["lastname"] = "Veuillez saisir votre nom";

        }

    }


    var_dump($erreorMessages);



    if(isset($_GET["username"])){
        $username = $_GET["username"];
    }

    if(isset($_GET["dateofBirth"])){
        $dateofBirth = $_GET["dateofBirth"];
    }

    if(isset($_GET["birthPay"])){
        $birthPay = $_GET["birthPay"];
    }

    if(isset($_GET["nationality"])){
        $nationality = $_GET["nationality"];

    }

    if(isset($_GET["address"])){
        $address = $_GET["address"];
    }

    if(isset($_GET["mail"])){
        $mail = $_GET["mail"];
    
    }

    if(isset($_GET["phone"])){
        $phone = $_GET["phone"];

    }

    if(isset($_GET["diploma"])){
        $diploma = $_GET["diploma"];
    }

    if(isset($_GET["numberPoleJobs"])){
        $numberPoleJobs = $_GET["numberPoleJobs"];
    }

    if(isset($_GET["numberBadge"])){
        $numberBadge = $_GET["numberBadge"];
    }

    if(isset($_GET["codecademyLink"])){
        $codecademyLink = $_GET["codecademyLink"];
    }

    if(isset($_GET["comment"])){
        $comment = $_GET["comment"];
    }

   if(isset($_GET["commentHacks"])){
       $commentHacks = $_GET["commentHacks"];

   } 

  
   

