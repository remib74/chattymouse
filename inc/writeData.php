<?php

/*connexion à la base avec pdo pour écriture des données */

try {
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    $base = new PDO('mysql:host=localhost; dbname=chattymouse', 'root', '');
    
    }
    
    catch(exception $e) {
    
    die('Erreur '.$e->getMessage());
    
    }
    
    $base->exec("SET CHARACTER SET utf8");
  
        $nickname = $_POST['nickname'];
        $zonetxt = $_POST['zonetxt'];
        $dateUsed=date('h:i:s');
    
    /*on vérifie que les champs ont été renseignés et on écrit dans la base (userid,messages,date)*/
    if (!empty($nickname)&&!empty($zonetxt)){

    
        $smileys=[
            ':)'=>'img/00.gif',
            ':(('=>'img/01.gif',
            ':('=>'img/02.gif',
            '%|'=>'img/03.gif',
            '00°'=>'img/04.gif',
            '^^)'=>'img/05.gif',
            '++0'=>'img/06.gif',
            '8)'=>'img/07.gif',
            ':D)'=>'img/08.gif',
            ':0'=>'img/09.gif',
            ':¨¨'=>'img/10.gif',
            '..°°'=>'img/11.gif',
            ';)'=>'img/12.gif'
            ]; 
  
            foreach($smileys as $key=>$value):
                $zonetxt=str_replace($key,"<img src=$value>" , $zonetxt);
                
            endforeach;
    $insertmsg=$base->prepare("INSERT INTO userandmessage (userNickName,messageUsed,dateUsed) VALUES(:nickname, :zonetxt,:dateUsed)");

    /*avec bind les caractère spéciaux sont rejetés (pas d'injection sql (normalement :D)) */
    $insertmsg->bindValue(':nickname', $nickname, PDO::PARAM_STR);
    $insertmsg->bindValue(':zonetxt', $zonetxt, PDO::PARAM_STR);
    $insertmsg->bindValue(':dateUsed', $dateUsed, PDO::PARAM_STR);
    
        
    


    $insertmsg->execute();

    $insertmsg->closeCursor();
    $base = null;
    /*en sortie de script on redirige vers la page index*/
    header('Location: ../index.php');
    
    exit;
    }
    /*si l'écriture échoue (conditions non vérifiées) on redirige vers la page index*/
    else{
      header('Location: ../index.php');
    exit;
    }
?>