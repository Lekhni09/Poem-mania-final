<?php
// Array with names

// get the q parameter from URL
$hint = $_REQUEST["q"];

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 