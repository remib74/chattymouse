<div id="wordviewer">
       <!-- requête mysql pour afficher les messages-->
       
        
    <?php


     function msgmaj(){
      
      include 'inc/connect.php';
        $retour = $base->query('SELECT * FROM userandmessage ORDER BY id DESC');
      $nb_datas =$retour->fetchAll();
      //var_dump($nb_data);
    
       
    foreach ($nb_datas as $nb_data){
    
    
    $data=$nb_data[1]." ".$nb_data[2]."<strong> ". $nb_data[3]."</strong><br/>";
    
        echo $data;
  
    }
    }
    msgmaj();
    ?>
  
    </div>