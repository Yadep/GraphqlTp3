<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$i = 0;
  foreach( $_POST as $cle=>$value )
  {
    if($i == 0)
    {
        echo $cle." = ".$value. " ";
    }
    else
    {
        echo ", ".$cle." = ".$value. " ";
    }
    $i++;
  }
?>