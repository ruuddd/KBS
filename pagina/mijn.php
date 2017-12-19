
<?php

print("Welkom" . " " . $_SESSION['firstname'] . "&nbsp;" . " <br>"); 
print_r(getUser($_SESSION['emailadres'], $pdo));
foreach(getUser($_SESSION['emailadres'], $pdo) as $key => $value){
        //if(($key = 'password')){
            echo "SLEUTEL: $key;  Waarde: $value<br />\n";
    //}
}

print('<a href="/kbs/pagina/inloggen/verwerk.php?actie=uitloggen"><strong>Uitloggen</strong></a>');