<?php

include_once 'Parsedown.php';
$Parsedown = new Parsedown();

if($_GET['original']){
    $mark_content = $_GET['original'];
    
    if($_GET['select']=='address'){
        if ($fp = fopen($mark_content, 'r')) {
            $content = '';
            while ($line = fgets($fp, 1024)) {
               $content .= $line;
            }  
         } else {
            echo '파일을 읽지 못했습니다.';
         }

         echo $Parsedown->text($content);
    }elseif($_GET['select']=='content'){
        echo $Parsedown->text($_GET['original']);
    }else{
    }
}else{
    echo '내용을 입력해 주세요';
}
?>