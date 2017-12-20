<?php

session_start();
include("../loginCheck.php");
include("create.php");
include("delete.php");

include("../../pagina/page/header.php");
?>
	<style type="text/css">
		input[type='file'] {
  color: transparent;
}
  .file 
  {
  	position: absolute;
  	margin-left: 227px;
  	margin-top: 104px;
  }

	</style>
	<main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
<?php
include '../../pagina/inloggen/melding.inc.php';
if (checkRights($_SESSION, 1))
{
	include('read.php');
	include('../dbConnect.php');
	$actie = "home";
	if(!empty($_GET['actie']))
	{
		$actie = $_GET['actie'];
	}
	
	if ($actie == "insertArtikel") 
	{
		$webpage = $_POST["webpage"];
		$content = $_POST["content"];
		$taal = $_POST["taal"];
		print(insertHome($pdo, $webpage, $taal, $content));
	}
	elseif ($actie == "aUpdate") 
	{
		print($actie($pdo, $_GET["productId"]));
	}
	else
	{
		if (isset($_GET["insertArtikel"])) 
		{
			insertArtikel($pdo, $_POST["naam"], $_POST["prijs"], $_POST["beschrijving"], $_FILES["file"], $_POST["aantal"], $_POST["category_id"]);
		}
		elseif (isset($_GET["updateArtikel"])) 
		{
			insertArtikel($pdo, $_POST["naam"], $_POST["prijs"], $_POST["beschrijving"], $_FILES["file"], $_POST["aantal"], $_POST["category_id"]);
		}
		print($actie($pdo));
	}
	?>
			</div>
		</div>
	</div>
</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/image.js"></script>
	<?php
	include("../../pagina/page/footer.php");
}
else
{
	echo "Go away";
}