<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$nom = "Ranim Ben Taher" ;
$filiere = "Info";
$moyenne = 11.80;
$bourse = false;
$anneeEtude = 2;
if ($bourse){
    $estBoursier= "Etudiant Boursier";
}else{
    $estBoursier= "Etudiant Non Boursier";
}

if($moyenne >= 10){
    $statut= "Admis(e)";
}else{
    $statut= "Non Admis(e)";
}
switch ($filiere){
    case "Info":
        $labelFiliere = "Informatique" ;
        $classeBadge = "badge-info";
        break;
    case "Elec":
        $labelFiliere = "Electronique" ;
        $classeBadge = "badge-elec";
        break;
    default:
        $labelFiliere = "Filiére inconnue" ;
        $classeBadge = "badge-defaut";
        break; }
?>
<div class="card" id="information">
        <label id="nom"><?= $nom ?></label><br>
        <label id="filiere"><?= $labelFiliere ?></label><br>
        <label id="annee">Année <?= $anneeEtude ?> — Moyenne: <?= $moyenne ?>/20</label><br>
        <label id="statut"><?= $statut  ?></label><br>
        <label id="bourse"><?= $estBoursier ?></label><br>
</div>
<div id="footer"><p>ranim bt</p></div>
    

</body>
</html>