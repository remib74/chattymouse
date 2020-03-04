
<?php

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
    '..°°'=>'img/11.gif'
    ]; 
    foreach($smileys as $key=>$value):
        $zonetxt=str_replace($key,"<img src=$value/>" , $zonetxt);
        /*$zonetxt=str_replace($key,"<img src='($value[':((']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value[':(']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value['%|']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value['00°']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value['^^)']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value['++0']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value['&)']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value[':D)']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value[':0']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value[':¨¨']);'/>" , $zonetxt);
        $zonetxt=str_replace($key,"<img src='($value['..°°']);'/>" , $zonetxt);
    */   var_dump($key);
    var_dump($value);
    endforeach;
 

            ?>