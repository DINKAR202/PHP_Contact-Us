<?php

$fptr = fopen("myfile.txt", "r");
echo fgets($fptr);
echo fgets($fptr);
echo fgets($fptr);

?>