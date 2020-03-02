<?php
/*************************************************************/

/********************chatty mouse 1.0.0***********************/

/*************************************************************/
?>
<!DOCTYPE html>
<html>
<!-- dès ouverture de la page écriture du cookie utilisateur avec un $i a hasard-->            
<?php 
            if(empty($_COOKIE['userOnline'])):
            $id=rand(200,30000030);
            setcookie('userOnline','User'.$id,time()+3600);  
        endif;
        ?>
<head>
<meta charset="UTF-8">
<!--on charge les scripts js dont jquery qui sert à rafraichir la page refresh.js-->
<script src="js/refresh.js" type="text/javascript"></script>
<script src="js/verif.js" type="text/javascript"></script>
<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<link href="css/reset.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

</head>
    <body>
    <!--ouverture de connexion à la base de données par pdo-->
    <?php include 'inc/connect.php';?>
    <header>
    <h1>chattyMouse 1.0.0</h1>
        </header>
        <main id="mainview">
            <div id="worldUser">
            <div id="wordviewer">
        <!-- requête mysql pour afficher les messages-->
            <?php 
    
      $retour = $base->query('SELECT * FROM userandmessage ORDER BY id DESC');
      $nb_datas =$retour->fetchAll();
      //var_dump($nb_data);
    foreach ($nb_datas as $nb_data) : ?>
    
    <?php echo $nb_data[1]." ".$nb_data[2]."<strong> ". $nb_data[3]."</strong><br/>";?>
    <?php endforeach;?>

  </p>
            </div>
            <div id="onlineUser">
        <!-- affichage de l'id utilisateur dans la zone online encore incomplète car elle devrait contenir toutes les sessions actives-->
<?php if(!empty($_COOKIE['userOnline'])):echo "your are connected as : ".($_COOKIE['userOnline']);endif;?>
            </div>
        </div>
            </main>
        <div id="msgConsole">
            <div id="emoji">
            <p>Emojis</p>
            </div>
            <div id="console">
            <!--le formulaire pour saisir des messages le champ nickname est en lecture seule-->
                <form action="inc/writeData.php" method="post" id="frmwrite" name="frmwrite">
                <div id="frmwriteNck">
                <input type="text" id="nickname" maxlength="15" name="nickname" class="frminput" value="<?php if(isset($_COOKIE['userOnline'])):echo($_COOKIE['userOnline']);endif;?>" readonly>
                </div>
                <input type="textarea" rows="5" cols="50" minlength="1" maxlength="300" id="zonetxt" name="zonetxt" class="frminput" value=""></textarea>
                <input type="submit" name="sendit" id="sendit" value="send" onclick="verif(frmwrite);">
                <input type="reset" name="resetit" id="resetit" value="reset form">
                </form>

                </div>
        </div>
        <!--le lien pour s'inscrire le formulaire n'est pas encore construit-->
			<footer><a href="inscription.php">inscription : remplissez ce formulaire !</a></footer>
			</body>
</html>