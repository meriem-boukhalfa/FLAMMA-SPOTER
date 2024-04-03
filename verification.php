<?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données soumises dans le formulaire
    $companyName = $_POST["company-name"];
    $userId = $_POST["user-id"];
    $companyEmail = $_POST["company-email"];

    // Vérifiez si les données correspondent aux critères souhaités
    if ($companyName === "University of Skikda" && ($userId === "1234" || $userId === "5678") && ($companyEmail === "boukhalfa2012@gmail.com" || $companyEmail === "arbatnik@yahoo.fr")) {
        // Les informations sont correctes, redirigez l'utilisateur vers h.html
        header("Location: h.html");
        exit;
    } else {
        // Les informations sont incorrectes, affichez un message d'erreur
        echo "Accès refusé. Veuillez vérifier vos informations et réessayer.";
    }
}
?>
