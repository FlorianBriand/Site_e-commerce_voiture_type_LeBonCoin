<!DOCTYPE html> 
<html lang="fr" >
<head>
<?php
//Si le titre est indiqué, on l'affiche entre les balises <title>
//echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> Forum </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--<link rel="stylesheet" media="screen" type="text/css" title="Design" href="./css/design.css" />-->
</head>


<?php

//Attribution des variables de session
/*$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;*/
if (isset($_SESSION['mail'])){
    $mail=$_SESSION['mail'];
}
else{
    $mail='';
}
//$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

//On inclue les 2 pages restantes
/*include("functions.php");
include("constants.php");*/

/*$balises=(isset($balises))?$balises:0;
if($balises)
{
//Inclure le script
}
*/
?>

</html>