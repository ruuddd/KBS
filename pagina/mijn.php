<html>
<?php

session_start();

print('<a href="../index.php">HOME</a><br>');

print("Welkom" . " " . $_SESSION['firstname']); 
?>	<br><br>

<?php
print('<a href="inloggen/verwerk.php?actie=uitloggen">Uitloggen</a>');
?>

</html>