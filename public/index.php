<?php
if (isset($_GET["p"])) {
    switch ($_GET["p"]) {

        case "aproposView":
        include ("../templates/aproposView.php");
        break;

        case "histoireView":
            include ("../templates/histoireView.php");
            break;
            
            case "contactView":
                include ("../templates/contactView.php");
                break;
               


        }
    }else{
        include("../templates/accueilView.php");
    }





?>