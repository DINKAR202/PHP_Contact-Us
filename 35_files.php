<?php


$fptr = fopen("myfile.txt", "r");
echo $fptr;

if($fptr){
    die("Unable to open the file.");
}

$content = fread($fptr, filesize("myfile.txt"));
echo $content;
?>