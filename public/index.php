<?php
if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case "aproposView":
        include ("../templates/aproposView.php");
        break;


        }
    }else{
        include("../templates/accueilView.php");
    }





?>