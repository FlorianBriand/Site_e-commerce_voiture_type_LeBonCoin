<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=projetdb', 'root', '');
    $id=(isset($_SESSION['idutilisateur']))?(int) $_SESSION['idutilisateur']:0;
    $action = (isset($_GET['action']))?htmlspecialchars($_GET['action']):'';
    switch($action){
    
        case "repondremp":

            $message = $_POST['message'];
            $titre = $_POST['titre'];
            $temps = time();
            $dest = (int) $_POST['dest'];

            $query=$db->prepare('INSERT INTO forum_mp
            (mp_expediteur, mp_receveur, mp_titre, mp_text, mp_time, mp_lu)
            VALUES(:id, :dest, :titre, :txt, :tps, :lu)'); 
            $query->bindValue(':id',$id,PDO::PARAM_INT);   
            $query->bindValue(':dest',$dest,PDO::PARAM_INT);   
            $query->bindValue(':titre',$titre,PDO::PARAM_STR);   
            $query->bindValue(':txt',$message,PDO::PARAM_STR);   
            $query->bindValue(':tps',$temps,PDO::PARAM_INT);
            $query->bindValue(':lu','0', PDO::PARAM_STR);   
            $query->execute();
            $query->CloseCursor(); 
    
        echo'<p>Votre message a bien été envoyé!<br />
        <br />Cliquez <a href="./ProjetAccueil.php">ici</a> pour revenir à l\'accueil<br />
        <br />Cliquez <a href="./ProfilMessagerie.php">ici</a> pour retourner
        à la messagerie</p>';
    
        break;

        case "nouveaump":

            $message = $_POST['message'];
            $titre = $_POST['titre'];
            $temps = time();
            $dest = $_POST['to'];
        
            $query=$db->prepare('SELECT idutilisateur FROM utilisateur
            WHERE LOWER(prenom) = :dest');
            $query->bindValue(':dest',strtolower($dest),PDO::PARAM_STR);
            $query->execute();
            if($data = $query->fetch())
            {
                $query=$db->prepare('INSERT INTO forum_mp
                (mp_expediteur, mp_receveur, mp_titre, mp_text, mp_time, mp_lu)
                VALUES(:id, :dest, :titre, :txt, :tps, :lu)'); 
                $query->bindValue(':id',$id,PDO::PARAM_INT);   
                $query->bindValue(':dest',(int) $data['idutilisateur'],PDO::PARAM_INT);   
                $query->bindValue(':titre',$titre,PDO::PARAM_STR);   
                $query->bindValue(':txt',$message,PDO::PARAM_STR);   
                $query->bindValue(':tps',$temps,PDO::PARAM_INT);   
                $query->bindValue(':lu','0',PDO::PARAM_STR);   
                $query->execute();
                $query->CloseCursor(); 
        
               echo'<p>Votre message a bien été envoyé!
               <br /><br />Cliquez <a href="./ProjetAccueil.php">ici</a> pour revenir à l\'accueil<br />
               <br />Cliquez <a href="./ProfilMessagerie.php">ici</a> pour retourner à
               la messagerie</p>';
            }
            else
            {
                echo'<p>Désolé ce membre n existe pas, veuillez vérifier et
                réessayez à nouveau.</p>';
            }
            break;
        
            default;
                echo'<p>Cette action est impossible</p>';
}
?> 
</body>
</html>
