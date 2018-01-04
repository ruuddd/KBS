<?php

$link = "/kbs/gegevens/";

print("Uw gegevens zijn aangepast!");
print("Klik hier om terug te gaan");
//header('Location: ' . $link);
print(header('Location: ' . $link));
exit();
