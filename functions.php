<?php
//functions
$number=121;
$root=sqrt($number);
echo $root;
echo"<br>";
echo sqrt(100);
echo"<br>";
echo pow(2,5);
echo"<br>";
echo min(31,36,45,82,10,47,94,56,112);
echo"<br>";
echo max(31,36,45,82,10,47,94,56,112);
echo"<br>";

$x=756.52569725;
echo"<br>";
echo round($x,4);
echo"<br>";
echo ceil($x);
echo"<br>";
$sentence="Kenya has dug many dams containing magic";
echo"<br>";
echo strtoupper($sentence);
echo"<br>";
echo $sentence;
echo"<br>";
echo strtolower($sentence);
echo"<br>";
echo ucwords($sentence);
echo"<br>";
echo str_word_count($sentence);
echo"<br>";
echo strlen($sentence);
echo"<hr>";
$password="dfhyuik";
echo"<hr>";
echo md5($password);
echo"<br>";
echo sha1($password);
echo"<br>";
echo crypt($password,"hyktlltoprkhpm,hjjenmge,kkjnnbbbbbbbbhhfcdddddxxdc");