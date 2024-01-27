<?php

if (!isset($_SESSION)) {
    session_start();
}

session_destroy();

// Define the target page based on the script filename
$targetPage = "";

switch (basename(__FILE__)) {
    case "cadastro.php":
        $targetPage = "cadastro.php";
        break;
    case "carrinhodecompra.php":
        $targetPage = "carrinhodecompra.php";
        break;
    case "conexao.php":
        $targetPage = "conexao.php";
        break;
    case "home.php":
        $targetPage = "home.php";
        break;
    case "login.php":
        $targetPage = "login.php";
        break;
    case "perfumecafone.php":
        $targetPage = "perfumecafone.php";
        break;
    case "perfumecascata.php":
        $targetPage = "perfumecascata.php";
        break;
    case "perfumechanel.php":
        $targetPage = "perfumechanel.php";
        break;
    case "femina.php":
        $targetPage = "femina.php";
        break;
    case "flawoer.php":
        $targetPage = "flawoer.php";
        break;
    case "perfumemissdior.php":
        $targetPage = "perfumemissdior.php";
        break;
    case "perfumepercevior.php":
        $targetPage = "perfumepercevior.php";
        break;
    case "perfumerose.php":
        $targetPage = "perfumerose.php";
        break;
    case "tempest.php":
        $targetPage = "tempest.php";
        break;
    case "homenovo.php":
        $targetPage = "homenovo.php";
        break;
}

header("Location: $targetPage");
exit;

?>

