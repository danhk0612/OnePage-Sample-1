<?php
if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FGdTube%2FREADME.md&select=address', 'r')) {
    $content = '';
    $line = fread($fp, 1024);
    echo $line;
} else {
}
?>