<?php
if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FCompany-Sample-1%2FREADME.md&select=address', 'r')) {
    $content = '';
    fpassthru($fp);
} else {
}
?>