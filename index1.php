<?php
    
    //讀取內容
    $fp=fopen("string.txt","r");
    while(!feof($fp))
    {
      $mychar=fgets($fp,1);
    }
    fclose($fp);


    //過濾
    $cleaned = preg_replace("/[A-Za-z0-9 ]/", "", $search);
    echo $cleaned;
?>