<?php
/**
 * Switch statement in PHP programming
 * @2022 waleed
 */

 $lang = 'PHP';
 switch ($lang) {
     case 'PHP':
         # code...
         echo 'PHP programming <br/>';
         break;
     case 'PYTHON':
         # code...
         echo 'Python programming <br/>';
         break;
     case 'CLANG':
         # code...
         echo 'C programming <br/>';
         break;
     case 'CSHARP':
         # code...
         echo 'C# programming <br/>';
         break;
     default:
         # code...
         echo 'NO knowledge!<br/>';
 }
 switch ($lang) {
     case 'PHP': case 'Python <br/>':
         # code...
         echo 'PHP programming <br/>';
         echo 'Python programming <br/>';
         break;
     case 'CLANG':
        echo 'C programming <br/>';
         # code...
         break;
     case 'CSHARP':
         # code...
         echo 'C# programming <br/>';
         break;
     default:
         # code...
         echo 'NO knowledge!<br/>';
 }

 $ages = 12;
 // switch case with conditions
 switch ($ages) {
     case ($ages == 18 || $ages == 20):
         echo 'you are eligiable Congratulation.'; 
         break;
     case ($ages < 18):
         # code...
         echo 'you are young';
         break;
     default:
         # code...
         echo 'You are not eligiable at this moment.<br/>';
         break;
 }
?>