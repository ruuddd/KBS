<?php
session_start();
include("../loginCheck.php");
include("warning.php");
include("../../pagina/page/header.php");
include '../../functions/CRUD/read.php';
?>
<script>
    function myFunction() {
        var txt;
        if (confirm("Weet u zeker dat u dit artikel wil verwijderen?") == true) {
            txt = "You pressed OK!";
        } else {
            txt = "You pressed Cancel!";
        }
        document.getElementById("demo").innerHTML = txt;
    }
</script>
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <?php
//checkRights checkt of de gebruiker wel de juiste rechten heeft om het CMS te gebruiken
                if (checkRights($_SESSION, 1)) {
                    //Include voor het ophalen van de pagina's
                    include('read.php');
                    include("create.php");
                    include("delete.php");
                    include("update.php");
                    include('../dbConnect.php');
                    //Zet een standaart actie die als pagina wordt geopend
                    $actie = "home";

                    //Laadt de meldingen
                    print(warning($_SESSION, $_GET));

                    //Checken welke link er wordt aangegeven en haalt de pagina bij deze link op
                    if (!empty($_GET['actie'])) {
                        $actie = $_GET['actie'];
                    }

                    if ($actie == "insertArtikel") {
                        $webpage = $_POST["webpage"];
                        $content = $_POST["content"];
                        $taal = $_POST["taal"];
                        print(insertHome($pdo, $webpage, $taal, $content));
                    } elseif ($actie == "aUpdate") {
                        print($actie($pdo, $_GET["productId"]));
                    } elseif ($actie == "cUpdate") {
                        print($actie($pdo, $_GET["categoryId"]));
                    } elseif ($actie == "updateCategory") {
                        updateCategory($pdo, $_GET["categoryId"], $_POST["category_name"], $_POST["category_description"]);
                    } elseif ($actie == "updateArtikel") {
                        updateArtikel($pdo, $_POST["naam"], $_POST["prijs"], $_POST["beschrijving"], $_POST["aantal"], $_GET["productId"]);
                    } elseif ($actie == "getOrder") {
                        print($actie($pdo, $_GET["orderId"]));
                    } else {
                        if (isset($_GET["insertArtikel"])) {
                            insertArtikel($pdo, $_POST["naam"], $_POST["prijs"], $_POST["beschrijving"], $_FILES["file"], $_POST["aantal"], $_POST["category_id"]);
                        } elseif (isset($_GET["insertCategory"])) {
                            insertCategory($pdo, $_POST["category_name"], $_POST["category_description"]);
                        }
                        //Opent een pagina als er geen optie was voor een custom pagina
                        print($actie($pdo));
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
                    <?php
                    include("../../pagina/page/footer.php");
                } else {
                    $_SESSION["cms_norights"] = "U heeft geen rechten om hier te zijn.";
                    print(warning($_SESSION, "cms_norights"));
                }