<?php
try {

    $base = new PDO('mysql:host=localhost; dbname=chattymouse', 'root', '');
    
    }
    
    catch(exception $e) {
    
    die('Erreur '.$e->getMessage());
    
    }
    
    $base->exec("SET CHARACTER SET utf8");
    
    
      $retour = $base->query('SELECT * FROM userandmessage');
      while ($data = $retour->fetch()){
    
        $userOn=$data['userNickName'];
        $messageOn=$data['messageUsed'];
        $dateOn=$data['dateUsed'];
    
      }
      //$base = null;
?>