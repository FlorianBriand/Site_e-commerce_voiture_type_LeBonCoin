<!-- ProfilMessagerie.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="PageArticle.css">
    <link rel="stylesheet" href="commun.css" /> 
    <script type="text/javascript" src="PageProfil.js"></script>
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
            

            case "consulter":

                $id_mess = $_POST["idmess"];
                echo '<h1>Consulter un message </h1><br /><br />';
                $query=$db->prepare('SELECT mp_lu, mp_text, mp_receveur, mp_expediteur, mp_titre, mp_time, idutilisateur , prenom
                FROM forum_mp
                LEFT JOIN utilisateur ON idutilisateur = mp_expediteur
                WHERE mp_id = :id');
                $query->bindValue(':id',$id_mess,PDO::PARAM_INT);
                $query->execute();
                $data=$query->fetch();;
                
                
                echo '<input type="button" name="" id="" value="Répondre " onclick="repondremessage('.$data['mp_expediteur'].')">';
                ?>
                <br>
                <table>     
                <tr>
                <th class="vt_auteur"><strong>Auteur</strong></th>             
                <th class="vt_mess"><strong>Message</strong></th>       
                </tr>
                <tr>
                <td>
                <?php echo''.$data['prenom'].'
                <td>Posté à '.date('H\hi \l\e d M Y',$data['mp_time']).'</td>';
                ?>
                </tr>
                <tr>
                <td></td>
                <br>
                <td>
                <?php   
                echo nl2br(stripslashes(htmlspecialchars($data['mp_text']))).'
                <hr /></td></tr></table>';
                
                if ($data['mp_lu'] == 0){
                    $query->CloseCursor();
                    $query=$db->prepare('UPDATE forum_mp 
                    SET mp_lu = :lu
                    WHERE mp_id= :id');
                    $query->bindValue(':id',$id_mess, PDO::PARAM_INT);
                    $query->bindValue(':lu','1', PDO::PARAM_STR);
                    $query->execute();
                    $query->CloseCursor();
                }
                
            break;

            case "nouveau":

                echo"<div id= 'messagerie'>";
                echo '<h1>Nouveau message privé</h1><br /><br />';
                ?>
                <form action=""><p>

                
                   <div id= "Envoyera">   
                        <label for="to">Envoyer à : </label>
                        <input type="text" id="to" name="to" />
                    </div>;
                <br />
                    <div id= "Titre">
                        <label for="titre">Titre : </label>
                        <input type="text" id="titre" name="titre" />
                    </div>;
                <br/>
                
                    <div id= "textemessagerie"> 
                        <textarea cols="100" rows="12" id="message" name="message"></textarea>
                    </div>;
                <br />

                <div id= "boutons_bas">
                        <input type="button" name="" id="" value="Envoyer" onclick="envoiemessage()">
                        <input type="reset" name="Effacer" value="Effacer" /></p>
                </div>;
                </form>
                </div>;
                <?php   
                
            break;

            case "repondre":
                
                echo '<h1>Répondre à un message privé</h1><br /><br />';
                
                $dest = $_POST["idex"];
                ?>
                <form action=""><p>
                <label for="titre">Titre : </label><input type="text" size="80" id="titre" name="titre" />
                <textarea cols="80" rows="8" id="message" name="message"></textarea>
                <br />
                <?php
                echo'<input type="button" name="" id="" value="Envoyer" onclick="repondmessage('.$dest.')">';
                ?>
                <input type="reset" name="Effacer" value="Effacer"/>
                </p></form>
                <?php
            break;

            case "supprimer":
                
                $id_mess = $_POST["idmess"];
                $query=$db->prepare('SELECT mp_receveur
                FROM forum_mp WHERE mp_id = :id');
                $query->bindValue(':id',$id_mess,PDO::PARAM_INT);
                $query->execute();
                $data = $query->fetch();
                $query->CloseCursor(); 
                $sur = $_POST["sur"];
                if ($sur == 0){
                   echo'Etes-vous certain de vouloir supprimer ce message ?<br />
                    <input type="button" name="" id="" value="oui" onclick="supprimermessage('.$id_mess.', 1)">
                    <input type="button" name="" id="" value="non" onclick="messages()">'; 
                 }

                else{
                    $query=$db->prepare('DELETE from forum_mp WHERE mp_id = :id');
                    $query->bindValue(':id',$id_mess,PDO::PARAM_INT);
                    $query->execute();
                    $query->CloseCursor(); 
                    echo'<p>Le message a bien été supprimé.<br /><br />
                    Cliquez <a href="./Profil.php">ici</a> pour revenir à votre profil.</p>';
                }
                
                
            break;

            case "SAVp":
                echo '<h1>J\'ai un problème avec ma voiture</h1><br /><br />';

                $query=$db->prepare('SELECT niveau, idutilisateur
                FROM utilisateur');
                $data = $query->fetch();
                    if($data['niveau']=3){ 
                            $dest = 1;
                            ?>
                            <form action=""><p>
                            <label for="problème">Votre problème : </label>
                            <input type="text" id="problème" value="j'ai un problème" readonly />
                            <br>
                            <textarea cols="80" rows="8" id="message" name="message"></textarea>
                            <br />
                            <?php
                            echo'<input type="button" name="" id="" value="Envoyer" onclick="SAVmessage('.$dest.')">';
                            ?>
                            <input type="reset" name="Effacer" value="Effacer"/>
                            </p></form>
                            <?php
                    }
            break;
            case "SAVr":
                echo '<h1>J\'ai un problème avec ma voiture</h1><br /><br />';

                $query=$db->prepare('SELECT niveau, idutilisateur
                FROM utilisateur');
                $data = $query->fetch();
                    if($data['niveau']=3){ 
                            $dest = 1;
                            ?>
                            <form action=""><p>
                            <label for="problème">Votre problème : </label>
                            <input type="text" id="problème" value="je veux un rdv" readonly />
                            <br>
                            <textarea cols="80" rows="8" id="message" name="message"></textarea>
                            <br />
                            <?php
                            echo'<input type="button" name="" id="" value="Envoyer" onclick="SAVmessage('.$dest.')">';
                            ?>
                            <input type="reset" name="Effacer" value="Effacer"/>
                            </p></form>
                            <?php
                    }
            break;
            case "SAVv":
                echo '<h1>J\'ai un problème avec ma voiture</h1><br /><br />';

                $query=$db->prepare('SELECT niveau, idutilisateur
                FROM utilisateur');
                $data = $query->fetch();
                    if($data['niveau']=3){ 
                            $dest = 1;
                            ?>
                            <form action=""><p>
                            <label for="problème">Votre problème : </label>
                            <input size="33" type="text" id="problème" value="je veux suivre la réparation de ma voiture" readonly />
                            <br>
                            <textarea cols="80" rows="8" id="message" name="message"></textarea>
                            <br />
                            <?php
                            echo'<input type="button" name="" id="" value="Envoyer" onclick="SAVmessage('.$dest.')">';
                            ?>
                            <input type="reset" name="Effacer" value="Effacer"/>
                            </p></form>
                            <?php
                    }
            break;
            case "SAVa":
                echo '<h1>J\'ai un problème avec ma voiture</h1><br /><br />';

                $query=$db->prepare('SELECT niveau, idutilisateur
                FROM utilisateur');
                $data = $query->fetch();
                    if($data['niveau']=3){ 
                            $dest = 1;
                            ?>
                            <form action=""><p>
                            <label for="problème">Votre problème : </label>
                            <input size="26" type="text" id="problème" value="je veux une assistance à domicile" readonly />
                            <br>
                            <textarea cols="80" rows="8" id="message" name="message"></textarea>
                            <br />
                            <?php
                            echo'<input type="button" name="" id="" value="Envoyer" onclick="SAVmessage('.$dest.')">';
                            ?>
                            <input type="reset" name="Effacer" value="Effacer"/>
                            </p></form>
                            <?php
                    }
            break;
            
            default;


            $query=$db->prepare('SELECT mp_lu, mp_id, mp_expediteur, mp_titre, mp_time, idutilisateur, prenom
            FROM forum_mp
            LEFT JOIN utilisateur ON mp_expediteur = idutilisateur
            WHERE mp_receveur = :id ORDER BY mp_id DESC');
            $query->bindValue(':id',$id,PDO::PARAM_INT);
            $query->execute();
            ?>

            <div id='NMessage'>
            
            <input type="button" name="" id="" value="Nouveau " onclick="nouveaumessage()">
            <?php
            if ($query->rowcount()>0){

                ?>

                <table>
                <tr>
                <th></th>
                <th class="mp_titre"><strong>Titre</strong></th>
                <th class="mp_expediteur"><strong>Expéditeur</strong></th>
                <th class="mp_time"><strong>Date</strong></th>
                <th><strong>Action</strong></th>
                </tr>

                <?php

                while ($data = $query->fetch()){

                    echo'<tr>';
                    if($data['mp_lu'] == 0){
                        echo'<td><img src="./images/message_non_lu.gif" alt="Non lu" /></td>';
                    }
                    else{
                        echo'<td><img src="./images/message.gif" alt="Déja lu" /></td>';
                     }
                    echo'<td id="mp_titre">
                    '.stripslashes(htmlspecialchars($data['mp_titre'])).'</td>
                    <td id="mp_expediteur">
                    '.$data['prenom'].'</td>
                    <td id="mp_time">'.date('H\hi \l\e d M Y',$data['mp_time']).'</td>
                    <td>
                    <input type="button" name="" id="" value="Lire" onclick="consultermessage('.$data['mp_id'].')">
                    <input type="button" name="" id="" value="supprimer" onclick="supprimermessage('.$data['mp_id'].', 0)">';
                }

                $query->CloseCursor();
                echo '</table>';

            }

            else{
                echo'<p>Vous n\'avez aucun message privé pour l\'instant, cliquez
                <a href="./ProjetAccueil.php">ici</a> pour revenir à l\'accueil</p>';
            }

        }
        

    ?>
    </div>;

</body>
</html>