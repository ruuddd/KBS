<?php

session_start();
include("../loginCheck.php");
include("create.php");
include("delete.php");
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
<?php
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
			echo $_POST["category_id"];
			insertArtikel($pdo, $_POST["naam"], $_POST["prijs"], $_POST["beschrijving"], $_FILES["file"], $_POST["aantal"], $_POST["category_id"]);
		}
		print($actie($pdo));
	}
	?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/image.js"></script>
	<?php
}
else
{
	echo "Go away";
}